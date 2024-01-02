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
            <div>
                <p>{{ errors }}</p>
            </div>
            <Button title="전송"/>
        </form>
        <Modal ref="modalRef"/>
    </Layout>
</template>
<script setup>
import Layout from "../../../Components/Layout.vue";
import { ref } from "vue";
import Button from "../../../Components/Button.vue";
import usePost from "../../../js/libs/controller/usePost.js";
import Modal from "../../../Components/Modal.vue";

const props = defineProps(
    {
        data: Object || null || undefined,
        errors: Object || null || undefined,
    }
)
const modalRef = ref(null)
const {storePost, updatePost} = usePost({modalRef});

const form = ref({
    title : props.data?.title,
    content: props.data?.content,
    writer: props.data?.writer
})

const submit = () => {
    if(props.data===null || props.data===undefined){
        storePost({form: form.value})
    }else{
        updatePost({form: form.value, id: props.data.id})
    }
}


</script>
