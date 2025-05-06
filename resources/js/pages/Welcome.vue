<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { Card, CardContent } from '@/components/ui/card'
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] dark:bg-[#0a0a0a] lg:justify-center lg:p-8">
        <header class="not-has-[nav]:hidden mb-6 w-full max-w-[335px] text-sm lg:max-w-4xl">
            <nav class="flex items-center justify-end gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('profile.index')"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    Profile
                </Link>
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <Link
                        :href="route('register')"
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <div class="duration-750 starting:opacity-0 flex w-full items-center justify-center opacity-100 transition-opacity lg:grow">
            <main class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row">
                <div class="min-h-screen from-green-50 flex items-center justify-center px-4">
                    <Card class="max-w-2xl w-full shadow-xl border-0 rounded-2xl">
                        <CardContent class="p-8">
                            <h1 class="text-3xl md:text-4xl font-bold text-green-800 mb-4">
                                🌿 Plant Care Tracker
                            </h1>
                            <p class="text-lg font-medium mb-6">
                                Трекер ухода за растениями
                            </p>

                            <div class="text-gray-700 space-y-4 leading-relaxed">
                                <p>
                                    Добро пожаловать в <strong>Plant Care Tracker</strong> — приложение для людей, которые любят растения.
                                </p>
                                <p>
                                    Здесь вы сможете отслеживать полив, удобрение, пересадку, а также вести заметки по каждому из своих зелёных друзей.
                                </p>
                                <p>
                                    🌱 Заботьтесь о растениях легко и с удовольствием.
                                </p>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </main>
        </div>
        <div class="h-14.5 hidden lg:block"></div>
    </div>
</template>
