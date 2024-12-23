<template>

    <div class="mx-2 my-3">
        <div class=" d-flex flex-grow-1">
            <input id="searchBar" class="rounded-pill border-0 px-2 py-2 flex-grow-1" type="text" placeholder="Ricerca..."/>
        </div>
    </div>

    <div class="card my-3 mx-2">
        <div class="mx-3 mt-3">
            <h6 class="fw-bold fs-4">Who to follow?</h6>
        </div>
        <div>
            <ul class="list-unstyled">
                <li v-for="user in users" :key="user.id" class="mx-2 my-2">
                    <div class="d-flex align-items-center">
                        <img :src="user.profile_image" class="rounded-circle mx-2 my-2" style="width: 40px; height: 40px;">
                        <a :href="`/profile/${user.id}`" class="mt-3 link-underline-light" style="color: black;">
                            <h6>{{ user.name }}</h6>
                            <p style="font-size: 12px;">@{{  user.user_name }}</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'RightSidebar',
    props: {
        users: {
            type: Array,
            required: true
        }
    },
}
</script>