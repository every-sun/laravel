<template>
    <Layout :title="data?'게시글 수정':'게시글 작성'">
        <form class="flex flex-col h-full justify-between" @submit.prevent="submit">
                <div>
                    <div class="flex gap-1 mb-3">
                        <Input v-model="form.title" name="제목" :error="errors.title"/>
                        <Input v-model="form.writer" name="작성자" :error="errors.writer"/>
                    </div>
                    <TextArea v-model="form.content" name="내용" :error="errors.content"/>
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
import ErrorText from "../../../Components/ErrorText.vue";
import Input from "../../../Components/Input.vue";
import TextArea from "../../../Components/TextArea.vue";

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
