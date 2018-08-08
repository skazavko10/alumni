<template>
    <div>
        <div class="row photo-order">
            <div class="col-md-4 latest-photos">
                <h4>{{ searchPeriodTitle }}</h4>
            </div>

            <div class="col-md-4 search-by-year">
                <h4>SEARCH BY YEAR</h4>
                <select @change="filterByPeriod()" v-model="period">
                    <option value="1943-1949">1943-49</option>
                    <option value="1950-1959">1950-59</option>
                    <option value="1960-1969">1960-69</option>
                    <option value="1970-1979">1970-79</option>
                    <option value="1980-1989">1980-89</option>
                    <option value="1990-1999">1990-99</option>
                    <option value="2000-2009">2000-2009</option>
                    <option value="2010-">2010-TODAY</option>
                </select>
            </div>

            <div class="col-md-4 display-style">
                <div class="container">
                    <span class="simple-view glyphicon glyphicon-th"></span>

                    <span class="grid-view glyphicon glyphicon-th-list">
                    </span>
                </div>
            </div>
        </div>

        <div class="photos-container">
            <div class="loading-bar" :class="showLoadingBar" @click="closePhotoDetails()"></div>

            <div class="row">
                <div class="column">
                    <div v-for="image in firstColumnImages" class="photo-container" @click="displayPhotoDetails(image.id)">
                        <img :src="fullImagePath(image.photo_path)" style="width:100%">

                        <div class="photo-overlay">
                            <h1 class="photo-publish-year">{{ image.post_date }}</h1>

                            <h1 class="photo-published-by">Uploaded: {{ image.user.name }}</h1>
                        </div>

                        <div class="photo-details" :class="{ showphotodetails: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closePhotoDetails()"></div>
                                </div>
                            </div>

                            <div class="image" :style="{ backgroundImage: `url('${fullImagePath(image.photo_path)}')` }">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div v-for="image in secondColumnImages" class="photo-container" @click="displayPhotoDetails(image.id)">
                        <img :src="fullImagePath(image.photo_path)" style="width:100%">

                        <div class="photo-overlay">
                            <h1 class="photo-publish-year">{{ image.post_date }}</h1>

                            <h1 class="photo-published-by">Uploaded: {{ image.user.name }}</h1>
                        </div>

                        <div class="photo-details" :class="{ showphotodetails: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closePhotoDetails"></div>
                                </div>
                            </div>

                            <div class="image" :style="{ backgroundImage: `url('${fullImagePath(image.photo_path)}')` }">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div v-for="image in thirdColumnImages" class="photo-container" @click="displayPhotoDetails(image.id)">
                        <img :src="fullImagePath(image.photo_path)" style="width:100%">

                        <div class="photo-overlay">
                            <h1 class="photo-publish-year">{{ image.post_date }}</h1>

                            <h1 class="photo-published-by">Uploaded: {{ image.user.name }}</h1>
                        </div>

                        <div class="photo-details" :class="{ showphotodetails: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closePhotoDetails"></div>
                                </div>
                            </div>

                            <div class="image" :style="{ backgroundImage: `url('${fullImagePath(image.photo_path)}')` }">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row show-more-images-container" v-if="currentPage < lastPage">
                <h4>
                    <span @click="loadMorePhotos()">SHOW MORE</span>
                </h4>
            </div>
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
                showLoadingBar: '',
                period: '2010-',
                searchPeriodTitle: 'LATEST UPLOADS',
                showPhotoDetails: '',
                clickedPhoto: ''
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
                    this.showLoadingBar = 'show-loading-bar';

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

                            this.showLoadingBar = '';
                        })
                        .catch(e => {
                          console.log(e);

                          this.showLoadingBar = '';
                        });
                }
            },

            filterByPeriod: function() {
                this.searchPeriodTitle = this.period;
                var periodArray = this.period.split('-');

                var periodStart = periodArray[0];
                var periodEnd = periodArray[1];

                if(periodEnd == '') {
                    var currentTime = new Date();

                    periodEnd = currentTime.getFullYear();
                    this.searchPeriodTitle = 'LATEST UPLOADS';
                }

                this.showLoadingBar = 'show-loading-bar';

                axios.get('http://localhost:8000/filter-photos/' + periodStart + '/' + periodEnd)
                    .then(response => {
                        this.firstColumnImages = [];
                        this.secondColumnImages = [];
                        this.thirdColumnImages = [];
                        this.currentPage = response.data.currentPage;
                        this.lastPage = response.data.lastPage;

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

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                      console.log(e);

                      this.showLoadingBar = '';
                    });
            },

            displayPhotoDetails: function(imageId) {
                console.log('III');
                this.showPhotoDetails = 'show-photo-details-' + imageId;
                this.showLoadingBar = 'show-loading-bar';
                this.clickedPhoto = imageId;
            },

            isPhotoOpend: function(imageId) {
                if(this.clickedPhoto == imageId) {
                    return true;
                }

                return false;
            },

            closePhotoDetails: function() {
                console.log('KLLK');
                this.showLoadingBar = '';
                this.showPhotoDetails = '';
                this.clickedPhoto = '';
            }
        }
    }
</script>
