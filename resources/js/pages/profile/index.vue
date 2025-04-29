<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import {
    Card,
    CardContent,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';
import { defineProps } from 'vue'

// eslint-disable-next-line @typescript-eslint/no-unused-vars
const props = defineProps<{
    plants: Array<{
        id: number
        name: string
        description: string
    }>
}>()

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Profile',
        href: '/profile',
    },
];
</script>

<template>
    <Head title="Profile" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div v-if="!plants.length"><span> У вас нет растений! Хотите добавить?</span></div>
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div>
                    <Card>
                        <CardHeader>
                            <CardTitle>Добавить новое растение</CardTitle>
                        </CardHeader>
                        <CardContent>

                        </CardContent>
                    </Card>
                </div>
                <div
                    v-for="plant in plants" :key="plant.id"
                >
                    <Card>
                        <CardHeader>
                            <CardTitle>{{plant.name}}</CardTitle>
                        </CardHeader>
                        <CardContent>
                            {{plant.description}}
                        </CardContent>
                    </Card>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
