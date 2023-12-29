<template>
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primary px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company" />
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li v-for="item in navigation" :key="item.name">
                                <a :href="item.href" :class="[item.current ? 'bg-secondary text-white' : 'text-neutral hover:text-white hover:bg-secondary', 'group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold']">
                                    <component :is="item.icon" :class="[item.current ? 'text-white' : 'text-neutral group-hover:text-white', 'h-6 w-6 shrink-0']" aria-hidden="true" />
                                    {{ item.name }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>2
            </nav>
        </div>
    </div>
    <div class="lg:pl-72">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
            <p>라라벨 투두리스트</p>
        </div>
        <h3 class="px-8 py-8 font-bold text-xl">{{ title }}</h3>
        <main class="py-10 h-screen">
            <div class="px-4 sm:px-6 lg:px-8">
                <slot></slot>
            </div>
        </main>
    </div>
</template>
<script setup>
import {
    FolderIcon,
    PlusIcon,
} from '@heroicons/vue/24/outline'
import { inject } from "vue";

const props = defineProps(
    {title: String || null || undefined}
)

const route = inject('route')

const navigation = [
    { name: '목록', href: '/', icon: FolderIcon, current: true },
    { name: '작성', href: route('post.create'), icon: PlusIcon, current: false },
]


</script>
