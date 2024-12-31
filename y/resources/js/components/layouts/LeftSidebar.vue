<template>
    <div class="position-fixed">
        <div class="my-3">
            <p>Logo</p>
        </div>
        <div class="my-2 text-center">
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-home" aria-hidden="true"></i></span>
                <p> <a :href="'/'" class="text-decoration-none text-dark">
                        Home
                    </a></p>
            </div>
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-search" aria-hidden="true"></i></span>
                <p>Esplora</p>
            </div>
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-bell" aria-hidden="true"></i></span>
                <p>Notifiche</p>
            </div>
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <p>Messaggi</p>
            </div>
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-user" aria-hidden="true"></i></span>
                <p>
                    <a :href="isLoggedIn ? `/profile/${user.id}` : '/register'" class="text-decoration-none text-dark">
                        Profilo
                    </a>
                </p>
            </div>
            <div class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
                <p>Impostazioni</p>
            </div>

            <div v-if="isLoggedIn" class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-external-link" aria-hidden="true"></i></span>
                <p>
                    <button type="button" class=" btn p-0 mx-2 text-decoration-none text-dark" @click="openLogoutModal">
                        Esci
                    </button>
                </p>
            </div>

            <div v-if="!isLoggedIn" class="d-flex my-2">
                <span class="mx-2"><i class="fa fa-user" aria-hidden="true"></i></span>
                <p>
                    <a :href="'/login'" class="text-decoration-none text-dark">
                        Login
                    </a>
                </p>
            </div>

            <div class="d-flex flex-grow-1 me-5">
                <button type="button"
                    class="btn rounded-pill btn-info d-flex justify-content-center align-items-center flex-grow-1 fw-bold text-light"
                    @click="openPostModal">Post</button>
            </div>



        </div>
    </div>
    <PostModal ref="PostModal" :posts="posts"/>
</template>

<script>

import Modal from 'bootstrap/js/dist/modal'
import PostModal from '../modals/PostModal.vue';

export default {

    props: {
        isLoggedIn: {
            type: Boolean,
            required: true
        },
        user: {
            type: Object,
            default: null
        },
        posts: {
            type: Array,
            required: true
        }
    },
    methods: {
        openLogoutModal() {
            const modalElement = document.getElementById('logoutModal');
            if (modalElement) {
                const modal = new Modal(modalElement);
                modal.show();
            }
        },
        openPostModal() {
            this.$refs.PostModal.showModal();
        }
    },
    components: {
        PostModal
    }

};
</script>