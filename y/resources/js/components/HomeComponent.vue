<template>
    <MainLayout :image-path="imagePath" :is-logged-in="isLoggedIn" :user="user" :posts="posts">

        <div class="my-3">Spazio riempitivo</div>
        <form @submit.prevent="this.createPost(posts)">
            <div id="sendArea" class="d-flex flex-grow-1 position-relative">
                <textarea class="d-flex flex-grow-1" v-model="body" placeholder="What's happening?" style="resize: none;"></textarea>
                <button class="btn btn-info text-light rounded-pill position-absolute end-0 bottom-0 me-2 mb-2">Post</button>
            </div>
        </form>


        <div v-for="post in posts" :key="post.id" class="border my-1">
            <div class="d-flex align-items-center">
                <img :src="post.user.profile_image" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                <h6 class="mx-3 my-3">{{ post.user.name }}</h6>
            </div>
            <div class="mx-3">
                <p>{{ post.body }}</p>
            </div>
        </div>

    </MainLayout>
</template>

<script>
import MainLayout from './layouts/MainLayout.vue';
import { ref, onBeforeUnmount, onMounted } from 'vue';
import axios from 'axios';
import createPostMixin from '../mixins/createPostMixin';
export default {
    props: {
        imagePath: {
            type: String,
            required: true
        },
        users: {
            type: Array,
            required: true
        },
        isLoggedIn: {
            type: Boolean,
            required: true
        },
        user: {
            type: Object,
            default: null
        },
    },
    setup() {
        const posts = ref([]);
        const loading = ref(false);
        let page = ref(1);
        let observer;

        const fetchPosts = async () => {
            try {
                loading.value = true;
                const response = await axios.get(`/api/posts?page=${page.value}`);
                if (response.data.data.length > 0) {
                    posts.value.push(...response.data.data);
                    page.value++;
                }
            } catch {
                console.error(error);
            } finally {
                loading.value = false;
            }
        };

        const handleScroll = () => {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolledFromTop = window.scrollY;

            if (scrollableHeight - scrolledFromTop < 100 && !loading.value) {
                fetchPosts();
            }
        };

        onMounted(() => {
            fetchPosts();
            window.addEventListener('scroll', handleScroll);
        });

        onBeforeUnmount(() => {
            window.removeEventListener('scroll', handleScroll);
        });

        return {
            posts,
            loading,
        };

    },
    components: { MainLayout },
    mixins: [createPostMixin],

}
</script>