<template>
    <Layout title="게시글 목록">
        <div class="w-full flex flex-col gap-6">
            <table class="w-full divide-y divide-gray-300">
                <thead>
                <tr class="w-full">
                    <th scope="col" class="px-3 py-1 text-left text-sm font-semibold text-gray-900 w-[10%] ">번호</th>
                    <th scope="col" class="px-3 py-1 text-left text-sm font-semibold text-gray-900 w-[50%]">제목</th>
                    <th scope="col" class="px-3 py-1 text-left text-sm font-semibold text-gray-900 w-[25%]">작성자</th>
                    <th scope="col" class="py-1 px-3 w-[15%]"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                <tr v-for="(post, i) in data.data" :key="post.id" class="cursor-pointer hover:bg-yellow-50">
                    <td class="whitespace-nowrap px-3 py-1 text-sm text-gray-500">{{ i+1 }}</td>
                    <td class="whitespace-nowrap px-3 py-1 text-sm text-gray-500" @click="showPost(post.id)">{{ post.title }}</td>
                    <td class="whitespace-nowrap px-3 py-1 text-sm text-gray-500">{{ post.writer }}</td>
                    <td class="whitespace-nowrap py-1 text-right text-sm font-medium sm:pr-6">
                        <div class="flex gap-6 justify-end">
                            <a href="#" class="text-primary hover:text-neutral px-5">수정</a>
                            <a href="#" class="text-primary hover:text-neutral px-5">삭제</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>
<script setup>
import Layout from "../Components/Layout.vue";
import {router} from "@inertiajs/vue3";
import { inject } from "vue";

const props = defineProps({
    data: Array
})
const route = inject('route');
console.log(props.data);
const showPost = (id) => {
    router.get(route('post.show', id));
}

</script>

