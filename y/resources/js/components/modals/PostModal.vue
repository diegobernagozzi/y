<template>
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="postModalLabel">Nuovo post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form @submit.prevent="this.createPost(posts)">
                    <div class="modal-body">
                        <textarea v-model="body" placeholder="A cosa stai pensando?" class="w-100 h-100 border-0" required
                            style="resize: none; background-color: #f8fafc;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Modal from 'bootstrap/js/dist/modal'
import createPostMixin from '../../mixins/createPostMixin';
export default {
    data() {
        return {
            body: '',
            user_id: '',
        };
    },
    methods: {
        showModal() {
            const modalElement = document.getElementById('postModal');
            if (modalElement) {
                const modal = new Modal(modalElement);
                modal.show();
            }
        }
    },
    mixins: [createPostMixin],
    props: {
        posts: {
            type: Array,
            required: true

        }
    }
};
</script>
  