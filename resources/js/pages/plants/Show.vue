<script setup lang="ts">

import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import {Head, useForm} from '@inertiajs/vue3';
import {defineProps, watch} from 'vue'
import type {Plant} from '@/types/plant/plant';
import type {PlantType} from '@/types/plant/plantType';
import type {Requirement} from '@/types/plant/requirements';
import {DirectoriesDTO} from "@/types/plant/directories";
import {Input} from "@/components/ui/input";
import {Label} from "@/components/ui/label";
import {Textarea} from "@/components/ui/textarea";
import InputError from "@/components/InputError.vue";
import {Button} from "@/components/ui/button";
import { ref } from 'vue'
import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from '@/components/ui/accordion'

const props = defineProps<{
    plant: Plant;
    plantTypes: Array<PlantType>;
    requirements: Requirement,
    directories: DirectoriesDTO
}>()

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: props.plant.name,
        href: route('plant.show', props.plant.id),
    },
];

const form = useForm({
    plant: props.plant,
    requirements: props.requirements,
});

const submit = () => {
    // Логика отправки данных на сервер
    console.log(form);
    alert('Растение обновлено!')
}
</script>

<template>
    <Head title="Profile" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <pre>
            {{ form.requirements }}
        </pre>
        <div class="px-4 py-6">
            <div class="flex flex-col space-y-8 md:space-y-0 lg:flex-row lg:space-x-12 lg:space-y-0">
                    <form @submit.prevent="submit" class="space-y-6">
                        <Button :disabled="form.processing">Save</Button>

                        <div class="grid gap-2">
                            <Label for="name">Название растения</Label>
                            <Input
                                id="name" class="mt-1 block w-full"
                                v-model="form.plant.name"
                                required
                                placeholder="Название растения" />
                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="name">Описание растения</Label>
                            <Textarea
                                id="description" class="mt-1 block w-full"
                                v-model="form.plant.description"
                                required
                                placeholder="Описание растения" />
                        </div>
                        <div class="grid gap-2">
                            <Label for="name">Тип растения</Label>
                            <select
                                v-model="form.plant.type_id"
                                id="plantType"
                                required
                            >
                                <option v-for="type in plantTypes" :key="type.id" :value="form.plant.type_id">
                                    {{ type.name }}
                                </option>
                            </select>
                        </div>

                        <Accordion type="single" collapsible>
                            <AccordionItem value="item-1">
                                <AccordionTrigger>Полив</AccordionTrigger>
                                <AccordionContent>
                                    <Label>Способы полива</Label>
                                    <ul>
                                        <li v-for="method in props.directories.wateringMethod">
                                            <p>{{ method.name }}: {{ method.description }}</p>
                                        </li>
                                    </ul>


                                    <div class="grid gap-2">
                                        <Label for="name">Частота полива</Label>
                                        <Input
                                            id="description" class="mt-1 block w-full"
                                            v-model="form.requirements.watering_requirement.frequency_days"
                                            required
                                            placeholder="Описание растения" />
                                    </div>
                                    <div class="grid gap-2">
                                        <Label for="name">Объём воды</Label>
                                        <Input
                                            id="description" class="mt-1 block w-full"
                                            v-model="form.requirements.watering_requirement.amount_ml"
                                            required
                                            placeholder="Объём воды" />
                                    </div>
                                    <select
                                        v-model="form.requirements.watering_requirement.watering_method_id"
                                        id="plantType"
                                        required
                                    >
                                        <option v-for="method in props.directories.wateringMethod" :key="method.id" :value="form.requirements.watering_requirement.watering_method_id">
                                            {{ method.name }}
                                        </option>
                                    </select>
                                </AccordionContent>
                            </AccordionItem>
                        </Accordion>
                    </form>
            </div>
        </div>
    </AppLayout>
</template>
