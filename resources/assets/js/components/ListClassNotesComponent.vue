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

                <div v-for="classNote in firstPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)' @click="showClassNoteDetails(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class="{ 'show-additional-section': isClassNoteClicked(classNote) }">
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in secondPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)' @click="showClassNoteDetails(classNote.id)">{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in thirdPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in fourthPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in fifthPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in sixthPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in seventhPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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

                <div v-for="classNote in eightPeriodClassNotes" class="notes-container">
                    <div class="row">
                        <div class="col-md-10 title">
                            <h1 :class='classNoteId(classNote.id)'>{{ classNote.name }}</h1>
                        </div>

                        <div class="col-md-2 expand">
                            <span>&#43;</span>
                        </div>
                    </div>

                    <div class="row additional-section" :class='classNoteId(classNote.id)'>
                        <div class="col-md-12 text">
                            <h5>{{ classNote.text }}</h5>
                        </div>
                    </div>
                </div>
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
                        this.eightPeriodClassNotes.push(response.data);

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

            showClassNoteDetails: function(classNoteId) {
                
                var clickedClassNote = this.firstPeriodClassNotes.find(this.findByClassNoteId);

                this.secondPeriodClassNotes.map(function(classNote, key) {
                    if(classNote.id == classNoteId) {
                        classNote.show = 'show';
                    }
                });
            },

            isClassNoteClicked: function(classNote) {
                if(classNote.show == 'show') {
                    console.log('IIII');
                    return true;
                }

                return false;
            },

            capitalizeString: function(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        }
    }
</script>
