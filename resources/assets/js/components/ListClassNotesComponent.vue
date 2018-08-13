<template>
    <div class="class-notes-by-period">
        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="first-period" @click="showClassNotesByPeriod('first-period')">1943 - 1949</h2>   
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('first-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeFirstPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in firstPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromFirstPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="firstPeriodClassNotesPaginator" @pagination-change-page="firstPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="second-period" @click="showClassNotesByPeriod('second-period')">1950 - 1959</h2>  
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('second-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeSecondPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in secondPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromSecondPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="secondPeriodClassNotesPaginator" @pagination-change-page="secondPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="third-period" @click="showClassNotesByPeriod('third-period')">1960 - 1969</h2>   
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('third-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeThirdPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in thirdPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromThirdPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="thirdPeriodClassNotesPaginator" @pagination-change-page="thirdPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="fourth-period" @click="showClassNotesByPeriod('fourth-period')">1970 - 1979</h2>  
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('fourth-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeFourthPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in fourthPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromFourthPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="fourthPeriodClassNotesPaginator" @pagination-change-page="fourthPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="fifth-period" @click="showClassNotesByPeriod('fifth-period')">1980 - 1989</h2>   
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('fifth-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeFifthPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in fifthPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromFifthPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="fifthPeriodClassNotesPaginator" @pagination-change-page="fifthPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="sixth-period" @click="showClassNotesByPeriod('sixth-period')">1990 - 1999</h2>   
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('sixth-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeSixthPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in sixthPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromSixthPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="sixthPeriodClassNotesPaginator" @pagination-change-page="sixthPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="seventh-period" @click="showClassNotesByPeriod('seventh-period')">2000 - 2009</h2> 
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('seventh-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeSeventhPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in seventhPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromSeventhPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="seventhPeriodClassNotesPaginator" @pagination-change-page="seventhPeriodPagination"></pagination>
            </div>
        </div>

        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="eight-period" @click="showClassNotesByPeriod('eight-period')">2010 - TODAY</h2>  
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="showClassNotesByPeriod('eight-period')">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="activeEightPeriod">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in eightPeriodClassNotes" class="notes-container" :class="{ 'border-top-show': displayClassNoteTopBorder(classNote) }">
                    <div class="row">
                        <div class="col-md-10 title" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <h1 @click="showClassNoteDetailsFromEightPeriod(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand" :class="{ 'border-bottom-show': displayClassNoteBottomBorder(classNote) }">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>

                <pagination :data="eightPeriodClassNotesPaginator" @pagination-change-page="eightPeriodPagination"></pagination>
            </div>
        </div>

        <div class="upload-class-notes">
            <div class="loading-bar" :class="showLoadingBar" @click="closeModal()"></div>

            <div class="upload-message-container alert" :class="{ 'show-alert': showUploadMessage == 'show', 'hide': showUploadMessage == 'hide', 'alert-success': uploadAlertType == 'success', 'alert-danger': uploadAlertType == 'error' }">
                {{ this.uploadMessage }}
            </div>

            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 @click="uploadClassNoteContainerShow()">UPLOAD YOUR CLASS NOTES</h2>    
                </div>
                
                <div class="col-md-2">
                    <div class="arrow" @click="uploadClassNoteContainerShow()">
                        <p>S</p>
                    </div>
                </div>
            </div>

            <div class="additional-section" :class="showUploadClassNoteContainer">
                <div class="row">
                    <div class="col-md-10">
                        <h5>
                            Let your old classmates and the Alumni community know you latest news! Why not use this space to inform the community about marriages, births, deaths, awards and quallifications?
                        </h5>
                    </div>  
                </div>
                
                <form id="insert-class-note-form" @submit.prevent="insertClassNote()">
                    <div class="row">
                        <div class="col-md-10">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ nameFieldError }}</strong>
                            </span>

                            <input type="text" name="name" class="class-note-name" placeholder="Class Note Name" v-model="classNoteName" autofocus />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ descFieldError }}</strong>
                            </span>

                            <textarea v-model="classNoteDesc" class="class-note-input" name="text" placeholder="Write your words here..." rows="10"></textarea>
                        </div>
                    </div>

                    <div class="row submit-section">
                        <div class="col-md-10">
                            <div class="row section">
                                <div class="col-md-8">
                                    <h5>Please note your class note will be reviewed before being added to the site</h5>
                                </div>

                                <div class="col-md-4 button-container">
                                    <input type="submit" class="submit-class-note" value="SUBMIT">
                                </div>      
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            firstPeriodClassNotes: {
                type: String,
                required: true
            },
            secondPeriodClassNotes: {
                type: String,
                required: true
            },
            thirdPeriodClassNotes: {
                type: String,
                required: true
            },
            fourthPeriodClassNotes: {
                type: String,
                required: true
            },
            fifthPeriodClassNotes: {
                type: String,
                required: true
            },
            sixthPeriodClassNotes: {
                type: String,
                required: true
            },
            seventhPeriodClassNotes: {
                type: String,
                required: true
            },
            eightPeriodClassNotes: {
                type: String,
                required: true
            },
            
            firstPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            secondPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            thirdPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            fourthPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            fifthPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            sixthPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            seventhPeriodClassNotesPaginator: {
                type: Object,
                required: true
            },
            eightPeriodClassNotesPaginator: {
                type: Object,
                required: true
            }
        },

        data() {
            return {
                classNoteName: '',
                classNoteDesc: '',
                nameFieldError: '',
                descFieldError: '',
                showLoadingBar: '',
                uploadMessage: '',
                showUploadMessage: '',
                uploadAlertType: '',
                showUploadClassNoteContainer: '',
                activeFirstPeriod: '',
                activeSecondPeriod: '',
                activeThirdPeriod: '',
                activeFourthPeriod: '',
                activeFifthPeriod: '',
                activeSixthPeriod: '',
                activeSeventhPeriod: '',
                activeEightPeriod: ''
            }
        },

        mounted() {
            this.firstPeriodClassNotes = JSON.parse(this.firstPeriodClassNotes);
            this.secondPeriodClassNotes = JSON.parse(this.secondPeriodClassNotes);
            this.thirdPeriodClassNotes = JSON.parse(this.thirdPeriodClassNotes);
            this.fourthPeriodClassNotes = JSON.parse(this.fourthPeriodClassNotes);
            this.fifthPeriodClassNotes = JSON.parse(this.fifthPeriodClassNotes);
            this.sixthPeriodClassNotes = JSON.parse(this.sixthPeriodClassNotes);
            this.seventhPeriodClassNotes = JSON.parse(this.seventhPeriodClassNotes);
            this.eightPeriodClassNotes = JSON.parse(this.eightPeriodClassNotes);

            var firstPeriodClassNotesPaginator = JSON.parse(this.firstPeriodClassNotesPaginator);
            this.firstPeriodClassNotesPaginator = firstPeriodClassNotesPaginator;
            
            var secondPeriodClassNotesPaginator = JSON.parse(this.secondPeriodClassNotesPaginator);
            this.secondPeriodClassNotesPaginator = secondPeriodClassNotesPaginator;

            var thirdPeriodClassNotesPaginator = JSON.parse(this.thirdPeriodClassNotesPaginator);
            this.thirdPeriodClassNotesPaginator = thirdPeriodClassNotesPaginator;

            var fourthPeriodClassNotesPaginator = JSON.parse(this.fourthPeriodClassNotesPaginator);
            this.fourthPeriodClassNotesPaginator = fourthPeriodClassNotesPaginator;

            var fifthPeriodClassNotesPaginator = JSON.parse(this.fifthPeriodClassNotesPaginator);
            this.fifthPeriodClassNotesPaginator = fifthPeriodClassNotesPaginator;

            var sixthPeriodClassNotesPaginator = JSON.parse(this.sixthPeriodClassNotesPaginator);
            this.sixthPeriodClassNotesPaginator = sixthPeriodClassNotesPaginator;

            var seventhPeriodClassNotesPaginator = JSON.parse(this.seventhPeriodClassNotesPaginator);
            this.seventhPeriodClassNotesPaginator = seventhPeriodClassNotesPaginator;

            var eightPeriodClassNotesPaginator = JSON.parse(this.eightPeriodClassNotesPaginator);
            this.eightPeriodClassNotesPaginator = eightPeriodClassNotesPaginator;
        },

        methods: {
            classNoteId: function(id) {
                return 'note-' + id;
            },

            insertClassNote: function() {
                this.showLoadingBar = 'show-loading-bar';

                var myForm = document.getElementById('insert-class-note-form');
                var formData = new FormData(myForm);

                axios.post('http://localhost:8000/class-notes', formData)
                    .then(response => {
                        var newClassNote = response.data;

                        var classNotesLenght = this.eightPeriodClassNotes.length;
                        if(this.eightPeriodClassNotes[classNotesLenght - 1].show == 'show') {
                            newClassNote.borderTop = 'border-top-show';
                        }

                        this.eightPeriodClassNotes.push(newClassNote);

                        this.classNoteName = '';
                        this.classNoteDesc = '';
                        this.nameFieldError = '',
                        this.descFieldError = '';
                        this.showLoadingBar = '';
                        this.uploadMessage = 'Your Class Note has been added successfully!';
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
                        if(e.response.data.errors.name) {
                            this.nameFieldError = e.response.data.errors.name + '';
                        }
                        else {
                            this.nameFieldError = '';
                        }

                        if(e.response.data.errors.text) {
                            this.descFieldError = e.response.data.errors.text + '';
                        }
                        else {
                            this.descFieldError = '';
                        }

                        this.showLoadingBar = '';
                        this.uploadMessage = 'There wan an error while uploading your Class Note!';
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

            uploadClassNoteContainerShow: function() {
                if(this.showUploadClassNoteContainer == '') {
                    this.showUploadClassNoteContainer = 'show-additional-section';
                }
                else {
                    this.showUploadClassNoteContainer = '';
                }
            },

            showClassNotesByPeriod: function(period) {
                console.log(this.eightPeriodClassNotesPaginator.current_page);

                var periodArray = period.split('-');
                var periodName = 'active' + this.capitalizeString(periodArray[0]) + this.capitalizeString(periodArray[1]);
                
                if(periodName == 'activeFirstPeriod') {
                    if(this.activeFirstPeriod == '') {
                        this.activeFirstPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeFirstPeriod = '';
                    }
                }
                else if(periodName == 'activeSecondPeriod') {
                    if(this.activeSecondPeriod == '') {
                        this.activeSecondPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeSecondPeriod = '';
                    }
                }
                else if(periodName == 'activeThirdPeriod') {
                    if(this.activeThirdPeriod == '') {
                        this.activeThirdPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeThirdPeriod = '';
                    }
                }
                else if(periodName == 'activeFourthPeriod') {
                    if(this.activeFourthPeriod == '') {
                        this.activeFourthPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeFourthPeriod = '';
                    }
                }
                else if(periodName == 'activeFifthPeriod') {
                    if(this.activeFifthPeriod == '') {
                        this.activeFifthPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeFifthPeriod = '';
                    }
                }
                else if(periodName == 'activeSixthPeriod') {
                    if(this.activeSixthPeriod == '') {
                        this.activeSixthPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeSixthPeriod = '';
                    }
                }
                else if(periodName == 'activeSeventhPeriod') {
                    if(this.activeSeventhPeriod == '') {
                        this.activeSeventhPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeSeventhPeriod = '';
                    }
                }
                else if(periodName == 'activeEightPeriod') {
                    if(this.activeEightPeriod == '') {
                        this.activeEightPeriod = 'show-additional-section';
                    }
                    else {
                        this.activeEightPeriod = '';
                    }
                }
            },

            showClassNoteDetailsFromFirstPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.firstPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.firstPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.firstPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.firstPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.firstPeriodClassNotes.splice(0, this.firstPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromSecondPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.secondPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.secondPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.secondPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.secondPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.secondPeriodClassNotes.splice(0, this.secondPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromThirdPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.thirdPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.thirdPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.thirdPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.thirdPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.thirdPeriodClassNotes.splice(0, this.thirdPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromFourthPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.fourthPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.fourthPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.fourthPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.fourthPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.fourthPeriodClassNotes.splice(0, this.fourthPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromFifthPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.fifthPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.fifthPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.fifthPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.fifthPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.fifthPeriodClassNotes.splice(0, this.fifthPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromSixthPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.sixthPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.sixthPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.sixthPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.sixthPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.sixthPeriodClassNotes.splice(0, this.sixthPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromSeventhPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.seventhPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.seventhPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.seventhPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.seventhPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.seventhPeriodClassNotes.splice(0, this.seventhPeriodClassNotes.lenght);
            },

            showClassNoteDetailsFromEightPeriod: function(classNoteId) {
                var currentClassNoteId = null;
                var bBorderTop = true;

                this.eightPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        
                        currentClassNoteId = key;

                        if(typeof(classNote.show) == "undefined") {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                            
                            classNote.show = '';
                            bBorderTop = false;
                            classNote.borderBottom = '';
                        }
                        else if(typeof(classNote.show) != "undefined" && classNote.show == '') {
                            classNote.show = 'show';
                            bBorderTop = true;
                            classNote.borderBottom = 'border-bottom-show';
                        }
                    }
                });

                var nextClassNoteId = currentClassNoteId + 1;

                if(typeof(this.eightPeriodClassNotes[nextClassNoteId]) != "undefined") {
                    if(bBorderTop) {
                        this.eightPeriodClassNotes[nextClassNoteId].borderTop = 'border-top-show';
                    }
                    else {
                        this.eightPeriodClassNotes[nextClassNoteId].borderTop = '';
                    }
                }

                this.eightPeriodClassNotes.splice(0, this.eightPeriodClassNotes.lenght);
            },

            isClassNoteClicked: function(classNote) {
                if(typeof(classNote.show) != "undefined" && classNote.show == 'show') {
                    return true;
                }

                return false;
            },

            displayClassNoteTopBorder: function(classNote) {
                if(typeof(classNote.borderTop) != "undefined" && classNote.borderTop == 'border-top-show') {
                    return true;
                }

                return false;
            },

            displayClassNoteBottomBorder: function(classNote) {
                if(typeof(classNote.borderBottom) != "undefined" && classNote.borderBottom == 'border-bottom-show') {
                    return true;
                }

                return false;
            },

            capitalizeString: function(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            },

            firstPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('first-period-pagination?page=' + page)
                    .then(response => {
                        this.firstPeriodClassNotesPaginator = response.data.firstPeriodClassNotesPaginator;
                        this.firstPeriodClassNotes = response.data.firstPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            secondPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('second-period-pagination?page=' + page)
                    .then(response => {
                        this.secondPeriodClassNotesPaginator = response.data.secondPeriodClassNotesPaginator;
                        this.secondPeriodClassNotes = response.data.secondPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            thirdPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('third-period-pagination?page=' + page)
                    .then(response => {
                        this.thirdPeriodClassNotesPaginator = response.data.thirdPeriodClassNotesPaginator;
                        this.thirdPeriodClassNotes = response.data.thirdPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            fourthPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('fourth-period-pagination?page=' + page)
                    .then(response => {
                        this.fourthPeriodClassNotesPaginator = response.data.fourthPeriodClassNotesPaginator;
                        this.fourthPeriodClassNotes = response.data.fourthPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            fifthPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('fifth-period-pagination?page=' + page)
                    .then(response => {
                        this.fifthPeriodClassNotesPaginator = response.data.fifthPeriodClassNotesPaginator;
                        this.fifthPeriodClassNotes = response.data.fifthPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            sixthPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('sixth-period-pagination?page=' + page)
                    .then(response => {
                        this.sixthPeriodClassNotesPaginator = response.data.sixthPeriodClassNotesPaginator;
                        this.sixthPeriodClassNotes = response.data.sixthPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            seventhPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('seventh-period-pagination?page=' + page)
                    .then(response => {
                        this.seventhPeriodClassNotesPaginator = response.data.seventhPeriodClassNotesPaginator;
                        this.seventhPeriodClassNotes = response.data.seventhPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            },

            eightPeriodPagination(page = 1) {
                this.showLoadingBar = 'show-loading-bar';

                axios.get('eight-period-pagination?page=' + page)
                    .then(response => {
                        this.eightPeriodClassNotesPaginator = response.data.eightPeriodClassNotesPaginator;
                        this.eightPeriodClassNotes = response.data.eightPeriodClassNotes;

                        this.showLoadingBar = '';
                    })
                    .catch(e => {
                        console.log(e);

                        this.showLoadingBar = '';
                    });
            }
        }
    }
</script>
