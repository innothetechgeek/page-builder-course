<script> 
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import SectionManager from '@/Components/Admin/SectionManager.vue';

    import {reactive} from 'vue';

    export default {
        components:{
            AdminLayout, 
            SectionManager,
        },
 
        mounted(){

            this.getPageSections();

        },
        
        methods: {

            getPageSections(){

                //alert("I'm about to get page sections");

                axios.get('page/sections/'+this.activePage).then(response => {

                    this.pageSections = response.data;

                })
            }

        },
        props:{
            pages: Object,
        },

        data(){
            return reactive({
                 pageSections: [],
                 activePage: 1,

                // pageSections: [
                //     {
                //         id: 1,
                //         title: 'Slider',
                //         contentType: 'slides',
                //         content: '',
                //     },
                //     {
                //         id: 2,
                //         title: 'Courses',
                //         contentType: 'dynamic',
                //         content: 'we \' replace this with the actual courses',
                //     },
                //     {
                //         id: 3,
                //         title: 'Learn to cook',
                //         contentType: 'static',
                //         content: '',
                //     }
                //     ,  {
                //         id: 4,
                //         title: 'Why Choose Us',
                //         contentType: 'static',
                //         content: 'some content',
                //     }
                // ]
            })
        }
        
    }

</script>
<template>
    
    <AdminLayout>
       <div class="content-wrapper">

            <div class="content">
                <div class="container-fluid">
                    <div class="row table-agile-info">

                        <div class="col-sm-3">
                            <div class="card page-selector">
                                 <div class="card-header border-0">

                                    <h3 class="card-title">Select a page</h3>

                                 </div>

                                 <div class="card-body table-responsive">

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group p-card-body">
                                                
                                                <label> Select </label>
                                                <select @change="getPageSections()" class="form-control" v-model="activePage">
                                                    <option :value="page.id" v-for="(page,index) in pages" :key="page.id">{{ page.name }}</option>
                                                </select>

                                            </div>

                                        </div>
                                    </div>

                                 </div>
                            </div>
                        </div>

                        <div class="col-8">

                            <div class="card page-sections">

                                <SectionManager v-for="(section,index) in pageSections" :key="section.id" :section="section" ></SectionManager>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
       </div>
    </AdminLayout>
  
</template>
<style scoped>

.section-footer{
        display:flex;
        justify-content: flex-end;
    }

    .btn-success{
        background-color: #ff6c60;
        color:#fff;
        border-color: #ff6c60;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
    }
    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0,0,0,.125);
        padding: 0.75rem 0.75rem;
        padding-top:1.3rem;
        position: relative;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        color: #000000 ! important;
        background-color: #ddede0 ! important;
        border-color: #ddede0 ! important;
        font-size: 20px;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        float: left;
        font-size: 1.1rem;
        font-weight: 400;
        margin: 0;
    }

    .page-sections{
        padding:20px;
    }
</style>