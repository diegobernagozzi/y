<template>
    <MainLayout :image-path="imagePath">
        <div class="d-flex">
            <button type="button" onclick="alert('in sviluppo');" class="mx-2 my-2 pe-4 btn bg-transparent">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
            <div>
                <h6 class="fw-bold m-0">Diego Bernagozzi</h6>
                <p class="text-muted" style="font-size: 12px;">18 posts</p>
            </div>
        </div>
        <div class="position-relative" style="width:755px; height: 200px; background-color: aquamarine;">
            <!-- <img :src="imagePath" style="width: 755px; height: 200px;"> -->
            <img :src="imagePath" class="rounded-circle img-thumbnail start-0 mx-4 position-absolute"
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
            <h3 class="fw-bold">Diego Bernagozzi</h3>
            <div class="fs-6 text-muted">
                @diegobernagozzi
            </div>
        </div>

        <div class="mt-5 mx-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>

        <div class="mx-3">
            <span class="me-2 fw-bold">10 following</span>
            <span class="fw-bold">10 followers</span>
        </div>

        <div class="">
            <div class="border my-1">
                <div class="d-flex align-items-center">
                    <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                    <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
                </div>
                <div class="mx-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="border my-1">
                <div class="d-flex align-items-center">
                    <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                    <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
                </div>
                <div class="mx-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="border my-1">
                <div class="d-flex align-items-center">
                    <img :src="imagePath" class="rounded-circle mx-3 my-3" style="width: 30px; height: 30px;">
                    <h6 class="mx-3 my-3">Diego Bernagozzi</h6>
                </div>
                <div class="mx-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </MainLayout></template>


<script>
import MainLayout from './layouts/MainLayout.vue';

export default {
    props: {
        imagePath: {
            type: String,
            required: true
        }
    },
    components: { MainLayout }
}
</script>