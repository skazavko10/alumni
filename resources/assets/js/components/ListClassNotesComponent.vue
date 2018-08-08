<template>
    <div class="class-notes-by-period">
        <div class="period">
            <div class="row">
                <div class="col-md-10 first-col">
                    <h2 class="first-period">1943 - 1949</h2>   
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section first-period">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in firstPeriodClassNotes" class="notes-container">
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
                    <h2 class="second-period">1950 - 1959</h2>  
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section second-period">
                <div class="row">
                    <div class="col-md-12">
                        <div class="period-header-image">
                            
                        </div>
                    </div>
                </div>

                <div v-for="classNote in secondPeriodClassNotes" class="notes-container">
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
                    <h2 class="third-period">1960 - 1969</h2>   
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section third-period">
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
                    <h2 class="fourth-period">1970 - 1979</h2>  
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section fourth-period">
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
                    <h2 class="fifth-period">1980 - 1989</h2>   
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section fifth-period">
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
                    <h2 class="sixth-period">1990 - 1999</h2>   
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section sixth-period">
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
                    <h2 class="seventh-period">2000 - 2009</h2> 
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section seventh-period">
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
                    <h2 class="eight-period">2010 - TODAY</h2>  
                </div>
                
                <div class="col-md-2">
                    <p>S</p>
                </div>
            </div>

            <div class="additional-section eight-period">
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
    </div>
</template>

<script>
    export default {

        props: {
            firstPeriodClassNotes: {
                type: Array,
                required: true
            },
            secondPeriodClassNotes: {
                type: Array,
                required: true
            },
            thirdPeriodClassNotes: {
                type: Array,
                required: true
            },
            fourthPeriodClassNotes: {
                type: Array,
                required: true
            },
            fifthPeriodClassNotes: {
                type: Array,
                required: true
            },
            sixthPeriodClassNotes: {
                type: Array,
                required: true
            },
            seventhPeriodClassNotes: {
                type: Array,
                required: true
            },
            eightPeriodClassNotes: {
                type: Array,
                required: true
            }
        },

        data() {
            return {
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
            }
        }
    }
</script>
