export default {
    methods: {
        async createPost(posts) {
            try {
                // Prima richiedi il token CSRF (necessario per Sanctum)
                await axios.get('/sanctum/csrf-cookie');

                // Poi invia la richiesta POST
                const response = await axios.post('/api/posts', {
                    body: this.body,
                });

                console.log('post creato: ', response.data.post);

                posts.unshift(response.data.post);

                //console.log(response.data.message);
                this.body = ''; // Reset del campo body dopo la creazione del post
            } catch (error) {
                console.error(error.response?.data || error.message);
            }
        }
    }
}