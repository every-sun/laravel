<template>
    <Layout title="게시글 작성">
        <form class="flex flex-col h-80 justify-between" @submit.prevent="submit">
            <div>
                <div class="flex gap-1">
                    <input type="text" name="title" id="title" v-model="form.title" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mb-3" placeholder="제목" />
                    <input type="text" name="writer" id="writer" v-model="form.writer" class="block rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mb-3" placeholder="작성자" />
                </div>
                <textarea rows="8" name="content" id="content" v-model="form.content" class="block w-full resize-none border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 rounded-md shadow-sm ring-1 ring-inset ring-gray-300" placeholder="내용" />
            </div>
            <button class="w-full bg-secondary text-neutral hover:text-white rounded-md hover:bg-third p-1">전송</button>
        </form>
    </Layout>
</template>
<script setup>
import Layout from "../../../Components/Layout.vue";
import { inject, ref } from "vue";
import {router} from '@inertiajs/vue3';

const route = inject('route');

const form = ref({
    title : null,
    content: null,
    writer: null
})

const submit = () => {
    router.post(route('post.store'), form.value)
}


</script>
