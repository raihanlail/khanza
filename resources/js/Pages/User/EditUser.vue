<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    user: Object,
});
const form = useForm({
    name: props.user.name,
    gender: props.user.gender,
    email: props.user.email,
    age: props.user.age,
    no_reg: props.user.no_reg,
    no_rawat: props.user.no_rawat,

    unit: props.user.unit,
    dr: props.user.dr,
});
</script>

<template>
    <h1 class="font-bold text-2xl p-4">Edit Patient Data</h1>
    <form @submit.prevent="form.put(`/users/${user.id}`)">
        <div class="flex flex-col m-auto min-h-screen px-12 py-10">
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-left mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-[2.2rem] ">

                  Full Name
                </div>
                    <input
                    type="text"
                    placeholder="Add Name (ex: Iqbal Trikiswoyo)"
                    v-model="form.name"
                    class="input input-bordered text-black w-full mx-2 rounded-md"
                />
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-left mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-[4rem] py-2">

                  Email
                </div>
                    <input
                    type="email"
                    placeholder="Add Email (ex: iqbal@gmail.com) "
                    v-model="form.email"
                    class="input input-bordered text-black w-1/2 mx-2 rounded-md"
                />
                </label>
            </div>
            <div class="py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-left mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-[3.2rem] py-2">

                  Gender
                </div>
                    <select
                    
                    placeholder="Male or Female"
                    v-model="form.gender"
                    class="bg-white text-black w-1/3 mx-2 rounded-md"
                 >
                 <option  value="Male" selected>Male</option>
                 <option value="Female">Female</option>
                </select>
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-[4.8rem] py-2">

                  Age
                </div>
                    <input
                    type="text"
                    placeholder="Add Age (max 100)"
                    v-model="form.age"
                    class="input input-bordered text-black w-1/4 mx-2 rounded-md"
                />
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-4 py-2">

                  Reg Number
                </div>
                    <input
                    type="text"
                    placeholder="Add Registration Number (max 7 character)"
                    v-model="form.no_reg"
                    class="input input-bordered text-black w-9/12 mx-2 rounded-md"
                    maxlength="7"
                />
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold text-left mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="py-2 pr-3">

                  Care Number
                </div>
              
                    <input
                    type="text"
                    placeholder="Add Care Number (max 4 Character)"
                    v-model="form.no_rawat"
                    class="input input-bordered text-black w-2/4 mx-2  rounded-md"
                    maxlength="4"
                />
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold text-left mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-20">

                  Unit
                </div>
                    <select
                    type="text"
                    placeholder="Add Unit (ex: Kelamin)"
                    v-model="form.unit"
                    class="bg-white text-black w-3/4 mx-2 rounded-md"
                > 
                <option value="Radiologi">Radiologi</option>
                <option value="Fisioterapi">Fisioterapi</option>
                <option value="THT">THT</option>
                <option value="Kandungan">Kandungan</option>
                <option value="UGD">UGD</option>
                <option value="IGD">IGD</option>
                <option value="ICU">ICU</option>
                <option value="Poli Jantung"> Poli Jantung</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Mata">Poli Mata</option>
                <option value="Poli Kulit">Poli Kulit</option>
                <option value="Poli Saraf">Poli Saraf</option>
                <option value="Poli Penyakit Dalam">Poli Penyakit dalam</option>
                <option value="Poli Kelamin">Poli Kelamin</option>
                <option value="Poli Jiwa">Poli Jiwa</option>
                <option value="Poli Gizi">Poli Gizi</option>
                <option value="Poli Bedah Mulut">Poli Bedah Mulut</option>
                <option value="Poli Onkologi Radiasi">Poli Onkologi Radiasi</option>


              </select>
                </label>
            </div>
            <div class=" py-2">
                <label
                    class="flex flex-row text-white font-bold md:text-right mb-1 md:mb-0 pr-4"
                    for="inline-full-name"
                >
                <div class="pr-[3.8rem] py-2">

                  Doctor
                </div>
                    <select
                    
                    placeholder="Add Doctor (Ex: Dr. Zakir Naik)"
                    v-model="form.dr"
                    class="bg-white text-black w-3/4 mx-2 rounded-md"
                > 
                <option value="Dr. Reza Oktavian">Dr. Reza Oktavian</option>
                <option value="Dr. Miranda">Dr. Miranda</option>
                <option value="Dr. Alcina Dimitrescu">Dr. Alcina Dimitrescu</option>
                <option value="Dr. Donna Beneviento">Dr. Donna Beneviento</option>
                <option value="Dr. William Lu">Dr. William Lu</option>
                <option value="Dr. Alex Turner">Dr. Alex Turner</option>
                <option value="Dr. Jeffrey Epstein">Dr. Jeffrey Epstein</option>
                <option value="Dr. Pablo Escobar">Dr. Pablo Escobar</option>
                <option value="Dr. Eimi Fukada">Dr. Eimi Fukada</option>
                <option value="Dr. Ambatukam">Dr. Ambatukam</option>
                <option value="Dr. Luis Asmoking">Dr. Luis Asmoking</option>
                <option value="Dr. Ashley Graham">Dr. Ashley Graham</option>
                <option value="Dr. William Birkin">Dr. William Birkin</option>
                <option value="Dr. Sherry Birkin">Dr. Sherry Birkin</option>
                <option value="Dr. Annete Birkin">Dr. Annete Birkin</option>
                <option value="Dr. Ozwell E. Spencer">Dr. Ozwell E. Spencer</option>
                <option value="Dr. Albert Wesker">Dr. Albert Wesker</option>
                <option value="Dr. Karl Heisenberg">Dr. Karl Heisenberg</option>

              </select>
                </label>
            </div>
            

            <input
                type="submit"
                value="Edit Patient"
                class="w-32 h-12  bg-blue-500 hover:bg-blue-700 hover:cursor-pointer text-white my-10"
            />
        </div>
    </form>
</template>
