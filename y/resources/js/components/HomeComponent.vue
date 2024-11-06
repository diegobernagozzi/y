<template>
    <MainLayout :image-path="imagePath">
        <div>Spazio riempitivo</div>
        <div id="sendArea" class="d-flex flex-grow-1 position-relative">
            <textarea class="d-flex flex-grow-1" placeholder="What's happening?" style="resize: none;">
            </textarea>
            <button class="btn btn-info text-light rounded-pill position-absolute end-0 bottom-0 me-2 mb-2" disabled>Post</button>
        </div>

        <div class="border my-1">
            <div class="d-flex align-items-center">
                <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
            </div>
            <div class="mx-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="border my-1">
            <div class="d-flex align-items-center">
                <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
            </div>
            <div class="mx-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="border my-1">
            <div class="d-flex align-items-center">
                <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
            </div>
            <div class="mx-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </MainLayout>
</template>

<script>
import MainLayout from './layouts/MainLayout.vue';

    export default {
        props: {
            imagePath: {
                type: String,
                required: true
            }
        },
        mounted() {
            console.log("Component mounted.");
        },
        components: { MainLayout }
    }
</script>