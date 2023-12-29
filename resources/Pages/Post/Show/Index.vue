<template>
    <Layout>
        <div class="flex flex-col">
            <p>{{ post.title }}</p>
            <p>{{ post.writer }}</p>
            <p>{{ post.content }}</p>
        </div>
    </Layout>
</template>
<script setup>
import Layout from "../../../Components/Layout.vue";

const props = defineProps(
    {
        post: Object
    }
)
</script>
