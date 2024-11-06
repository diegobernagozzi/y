<template>
    <div class="container">
        <div class="d-flex">
            <div class="col-2">
                <LeftSidebar></LeftSidebar>
            </div>
            <div class="col-7 border-end border-start">
                <slot></slot>
            </div>
            <div class="col-3">
                <RightSidebar :image-path="imagePath"></RightSidebar>
            </div>
        </div>
    </div>
</template>

<script>
import LeftSidebar from './LeftSidebar.vue';
import RightSidebar from './RightSidebar.vue';

export default {
    name: 'MainLayout',
    props: {
        imagePath: {
            type: String,
            required: true
        }
    },
    components: {
        LeftSidebar,
        RightSidebar
    }
}
</script>