<template>
    <MainLayout :users="users" :user="user" :is-logged-in="isLoggedIn">
        <div class="d-flex my-3">
            <a href="/" type="button" class="mx-2 my-2 pe-4 btn bg-transparent">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <div>
                <h6 class="fw-bold m-0">{{ user.name }}</h6>
                <p class="text-muted" style="font-size: 12px;">18 posts</p>
            </div>
        </div>
        <div class="position-relative" style="width:755px; height: 200px; background-color: aquamarine;">
            <img :src="user.background_image" style="width: 755px; height: 200px;" class="object-fit-content"> 
            <img :src="user.profile_image" class="rounded-circle img-thumbnail start-0 mx-4 position-absolute"
                style="width: 133px; height: 133px; bottom: -65px;" />
        </div>
        <div class="position-relative">
            <div class="position-absolute end-0 mx-2 my-2 px-2">
                <button type="button" onclick="alert('in sviluppo');" class="btn rounded-pill border fw-bold">
                    Edit profile
                </button>
            </div>
        </div>

        <div class="position-relative mx-3 mt-5" style="top: 25px;">
            <h3 class="fw-bold">{{ user.name }}</h3>
            <div class="fs-6 text-muted">
                @{{ user.user_name }}
            </div>
        </div>

        <div class="mt-5 mx-3">
            <p>{{ user.description }}</p>
        </div>

        <div class="mx-3 my-2">
            <span class="me-2 fw-bold">10 following</span>
            <span class="fw-bold">10 followers</span>
        </div>

        <div class="">
            <div v-for="post in posts" v-key="post.id" class="border my-1">
                <div class="d-flex align-items-center">
                    <img :src="user.profile_image" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                    <h6 class="mx-3 my-3">{{ user.name }}</h6>
                </div>
                <div class="mx-3">
                    <p>{{ post.body }}</p>
                </div>
            </div>
        </div>
    </MainLayout></template>


<script>
import MainLayout from './layouts/MainLayout.vue';

export default {
    props: {
        user: {
            type: Object,
            required: true
        },
        posts: {
            type: Array,
            required: true
        },
        isLoggedIn: {
            type: Boolean,
            default: null
        }
    },
    components: { MainLayout }
}
</script>