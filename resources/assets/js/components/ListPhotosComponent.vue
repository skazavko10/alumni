<template>
    <div>
        <div class="photo-gallery header-image">
            <div class="upload-photo-container" @click="displayUploadPhotosContainer()">
                <a class="upload-your-photos">
                    UPLOAD YOUR PHOTOS
                </a>
            </div>
        </div>

        <div class="photo-gallery-text">
            <div class="row">
                <div class="col-md-12 text">
                    <h1>PHOTO GALLERY</h1>

                    <h4>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </h4>
                </div>
            </div>
        </div>

        <div class="upload-photos-container" :class="showUploadPhotosContainer" @click="displayUploadPhotosContainer()">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="title">INSERT PHOTOS TO UPLOAD</h2>
                </div>

                <div class="col-md-2">
                    <div class="close-thik" @click.stop="closeModal()"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form id="upload-photos-form" enctype="multipart/form-data" @submit.prevent="insertPhotos()">
                        <input id="input-b3" name="images[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." data-allowed-file-extensions='["jpg", "jpeg", "png", "gif"]'>
                    </form>
                </div>
            </div>
        </div>

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
                    <span class="simple-view" @click="changeActivePhotosContainer('simple')">
                        S
                    </span>

                    <span class="grid-view" @click="changeActivePhotosContainer('grid')">
                        G
                    </span>
                </div>
            </div>
        </div>

        <div class="loading-bar" :class="showLoadingBar" @click="closeModal()"></div>

        <div class="photos-container" :class="{ hidecontainer: isGridPhotoContainerNotActive() }">
            <div class="upload-message-container alert" :class="{ 'show-alert': showUploadMessage == 'show', 'hide': showUploadMessage == 'hide', 'alert-success': uploadAlertType == 'success', 'alert-danger': uploadAlertType == 'error' }">
                {{ this.uploadMessage }}
            </div>

            <div class="row">
                <div class="column">
                    <div v-for="image in firstColumnImages" class="photo-container" @click="displayPhotoDetails(image.id)">
                        <img :src="fullImagePath(image.photo_path)" style="width:100%">

                        <div class="photo-overlay">
                            <h1 class="photo-publish-year">{{ image.post_date }}</h1>

                            <h1 class="photo-published-by">Uploaded: {{ image.user.name }}</h1>
                        </div>

                        <div class="photo-details" :class="{ show: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closeModal()"></div>
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

                        <div class="photo-details" :class="{ show: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closeModal()"></div>
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

                        <div class="photo-details" :class="{ show: isPhotoOpend(image.id) }">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="date">{{ image.post_date }}</h2>
                                    <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
                                </div>

                                <div class="col-md-2">
                                    <div class="close-thik" @click.stop="closeModal()"></div>
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

        <div class="simple-photos-container" :class="{ show: isSimplePhotoContainerActive() }">
            <div class="simple-image-container" v-for="image in simpleGridImages">
                <div class="row">
                    <div class="col-md-12">
                        <img :src="fullImagePath(image.photo_path)" style="width: auto; max-width: 100%;">
                    </div>
                </div>

                <div class="row image-details">
                    <div class="col-md-12">
                        <h2 class="date">{{ image.post_date }}</h2> 
                        <h2 class="title">UPLOADED BY {{ image.user.name }}</h2>
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
            firstColumnImagesProp: {
                type: String,
                required: true
            },
            secondColumnImagesProp: {
                type: String,
                required: true
            },
            thirdColumnImagesProp: {
                type: String,
                required: true
            },
            lastPageProp: {
                type: String,
                required: true
            },
            currentPageProp: {
                type: String,
                required: true
            },
            simpleGridImagesProp: {
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
                clickedPhoto: '',
                showUploadPhotosContainer: '',
                activePhotoContainer: 'grid',
                uploadMessage: '',
                showUploadMessage: '',
                uploadAlertType: '',
                firstColumnImages: JSON.parse(this.firstColumnImagesProp),
                secondColumnImages: JSON.parse(this.secondColumnImagesProp),
                thirdColumnImages: JSON.parse(this.thirdColumnImagesProp),
                simpleGridImages: JSON.parse(this.simpleGridImagesProp),
                lastPage: JSON.parse(this.lastPageProp),
                currentPage: JSON.parse(this.currentPageProp)
            }
        },

        methods: {
            fullImagePath: function(photo_path) {
                return '/storage/photo_gallery/' + photo_path;
            },

            loadMorePhotos: function() {
                if(this.currentPage < this.lastPage) {
                    this.showLoadingBar = 'show-loading-bar';

                    axios.get('photos?page=' + ++this.currentPage)
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

                            response.data.simpleGridImages.map(function(image, key) {
                                that.simpleGridImages.push(image);
                            });

                            this.showLoadingBar = '';
                        })
                        .catch(e => {
                            console.log(e);

                            this.showLoadingBar = '';
                            this.uploadMessage = 'There wasn an error while loading the photos!';
                            this.uploadAlertType = 'error';
                            this.showUploadMessage = 'show';

                            var that = this;
                            setTimeout(function(){
                                that.showUploadMessage = 'hide';
                                that.uploadMessage = '';
                                that.uploadAlertType = '';
                            }, 5000);
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

                axios.get('filter-photos/' + periodStart + '/' + periodEnd)
                    .then(response => {
                        this.firstColumnImages = [];
                        this.secondColumnImages = [];
                        this.thirdColumnImages = [];
                        this.simpleGridImages = [];
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

                        response.data.simpleGridImages.map(function(image, key) {
                            that.simpleGridImages.push(image);
                        });

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                        this.uploadMessage = 'There wasn an error while loading the photos!';
                        this.uploadAlertType = 'error';
                        this.showUploadMessage = 'show';

                        var that = this;
                        setTimeout(function(){
                            that.showUploadMessage = 'hide';
                            that.uploadMessage = '';
                            that.uploadAlertType = '';
                        }, 5000);
                    });
            },

            displayPhotoDetails: function(imageId) {
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

            closeModal: function() {
                this.showLoadingBar = '';
                this.showPhotoDetails = '';
                this.clickedPhoto = '';
                this.showUploadPhotosContainer = '';
            },

            displayUploadPhotosContainer: function() {
                this.showUploadPhotosContainer = 'show';
                this.showLoadingBar = 'show-loading-bar';
            },

            insertPhotos: function() {
                var myForm = document.getElementById('upload-photos-form');
                var formData = new FormData(myForm);

                axios.post('photo-gallery', formData)
                    .then(response => {
                        var that = this;

                        response.data.firstColumnImages.map(function(image, key) {
                            that.firstColumnImages.unshift(image);
                        });

                        response.data.secondColumnImages.map(function(image, key) {
                            that.secondColumnImages.unshift(image);
                        });

                        response.data.thirdColumnImages.map(function(image, key) {
                            that.thirdColumnImages.unshift(image);
                        });

                        response.data.simpleGridImages.map(function(image, key) {
                            that.simpleGridImages.unshift(image);
                        });

                        this.showLoadingBar = '';
                        this.showUploadPhotosContainer = '';
                        this.uploadMessage = 'Your Photo/s are added successfully!';
                        this.uploadAlertType = 'success';
                        this.showUploadMessage = 'show';

                        var that = this;
                        setTimeout(function(){
                            that.showUploadMessage = 'hide';
                            that.uploadMessage = '';
                            that.uploadAlertType = '';
                        }, 5000); 
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                        this.showUploadPhotosContainer = '';
                        this.uploadMessage = 'There wasn an error while uploading your photo/s!';
                        this.uploadAlertType = 'error';
                        this.showUploadMessage = 'show';

                        var that = this;
                        setTimeout(function(){
                            that.showUploadMessage = 'hide';
                            that.uploadMessage = '';
                            that.uploadAlertType = '';
                        }, 5000); 
                    });
            },

            changeActivePhotosContainer: function(className) {
                this.activePhotoContainer = className;
            },

            isGridPhotoContainerNotActive: function() {
                if(this.activePhotoContainer == 'simple') {
                    return true;
                }

                return false;
            },

            isSimplePhotoContainerActive: function() {
                if(this.activePhotoContainer == 'simple') {
                    return true;
                }

                return false;
            }
        }
    }
</script>