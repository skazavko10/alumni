<template>
    <div class="photos-container">
        <div class="row">
            <div class="column">
                <span v-for="image in firstColumnImages">
                    <img :src="fullImagePath(image.photo_path)" style="width:100%">
                </span>
            </div>

            <div class="column">
                <span v-for="image in secondColumnImages">
                    <img :src="fullImagePath(image.photo_path)" style="width:100%">
                </span>
            </div>

            <div class="column">
                <span v-for="image in thirdColumnImages">
                    <img :src="fullImagePath(image.photo_path)" style="width:100%">
                </span>
            </div>
        </div>

        <div class="row show-more-images-container">
            <h4>
                <span @click="loadMorePhotos()">SHOW MORE</span>
            </h4>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            firstColumnImages: {
                type: Array,
                required: true
            },
            secondColumnImages: {
                type: Array,
                required: true
            },
            thirdColumnImages: {
                type: Array,
                required: true
            },
            lastPage: {
                type: String,
                required: true
            },
            currentPage: {
                type: String,
                required: true
            }
        },

        data() {
            return {
            }
        },

        mounted() {
            this.firstColumnImages = JSON.parse(this.firstColumnImages);
            this.secondColumnImages = JSON.parse(this.secondColumnImages);
            this.thirdColumnImages = JSON.parse(this.thirdColumnImages);
        },

        methods: {
            fullImagePath: function(photo_path) {
                return '/images/photo_gallery/' + photo_path;
            },

            loadMorePhotos: function() {
                if(this.currentPage < this.lastPage) {
                    axios.get('http://localhost:8000/photos?page=' + ++this.currentPage)
                        .then(response => {
                            var that = this;

                            response.data.firstColumnImages.map(function(image, key) {
                                that.firstColumnImages.push(image);
                            });

                            response.data.secondColumnImages.map(function(image, key) {
                                that.secondColumnImages.push(image);
                            });

                            response.data.thirdColumnImages.map(function(image, key) {
                                that.thirdColumnImages.push(image);
                            });
                        })
                        .catch(e => {
                          console.log(e);
                        });
                }
            }
        }
    }
</script>
