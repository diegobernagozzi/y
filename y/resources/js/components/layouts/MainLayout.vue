<template>
    <div class="container">
        <div class="d-flex">
            <div class="col-2">
                <LeftSidebar :is-logged-in="isLoggedIn" :user="user"></LeftSidebar>
            </div>
            <div class="col-7 border-end border-start">
                <slot></slot>
            </div>
            <div class="col-3">
                <RightSidebar :users="users"></RightSidebar>
            </div>
        </div>
    </div>
</template>

<script>
import LeftSidebar from './LeftSidebar.vue';
import RightSidebar from './RightSidebar.vue';

export default {
    name: 'MainLayout',
    components: {
        LeftSidebar,
        RightSidebar
    },
    props: {
        isLoggedIn: {
            type: Boolean,
            required: true
        },
        user: {
            type: Object,
            default: null
        }
    },
    data() {
        return {
            users: window.users || []
        };
    }
}
</script>