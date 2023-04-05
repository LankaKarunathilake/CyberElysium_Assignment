<template>

      <AppLayout>
            <template #content>
                  <h1 class="text-center dtitle"><span>A</span>dd <span>S</span>tudent</h1>

                  <div class="col-lg-12 addstudentContainer">
                    <div class="col-lg-8 mt-4 addstudentArea">
                        <form @submit.prevent="AddStudent">
                            <div class="row d-grid gap-3">
                                <div class="form-floating">
                                    <input
                                        name="name"
                                        id="floatingPassword"
                                        v-model="student.name"
                                        type="text"
                                        class="form-control"
                                        placeholder="Student Name"
                                    />
                                    <label class="label" for="floatingPassword"
                                        >Name</label
                                    >
                                </div>
                                <div class="form-floating">
                                    <input
                                        name="age"
                                        id="floatingPassword"
                                        v-model="student.age"
                                        type="text"
                                        class="form-control"
                                        placeholder="Age"
                                    />
                                    <label class="label" for="floatingPassword"
                                        >Age</label
                                    >
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"
                                        >Upload Image</label
                                    >
                                    <input
                                        name="image"
                                        @input="
                                            student.image =
                                                $event.target.files[0]
                                        "
                                        v-models="student.image"
                                        class="form-control form-control-sm"
                                        id="formFileSm"
                                        type="file"
                                    />
                                </div>

                                <div class="col-lg-4">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </template>
      </AppLayout>


</template>

<script>

import AppLayout from "@/Layouts/App.vue";
import { router } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        AppLayout,
        Link,
    },

    props: {
        students: Array,
    },

    data() {
        return {
            student: {
                name: "",
                age: "",
                image: "",
            },

            editStDetails: {
                name: "",
                age: "",
            },
        };
    },

    methods: {
        AddStudent() {
            router.post(route("studentList.add"), this.student);
        }
    },
};
</script>

<style lang="css" scoped>

    .addstudentContainer{

    }
    .dtitle{
        position: relative;
        top: 10vh;
        margin-bottom: 100px;
        font-size: 50px;
    }

    .label {
    padding-left: 20px !important;
    }

    .dtitle span{
        color: rgb(255, 169, 41);
        font-size: 70px;
    }

    .addstudentArea{
        margin: 0 auto;
        border: 2px solid rgba(0, 0, 0, 0.405);
        border-radius: 10px;
        padding: 50px;
    }

</style>
