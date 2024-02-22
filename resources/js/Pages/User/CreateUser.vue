<script setup>
import { useForm } from '@inertiajs/vue3';

  const form = useForm({
    name: '',
    gender:'',
    email:'',
    age:'',
    no_reg:'',
    no_rawat:'',
    
    unit:'',
    dr:''

  })


</script>

<template >
  <h1 class="font-bold text-2xl p-4">Input Patient Data</h1>
  <form @submit.prevent="form.post('/users')" >
    <div class=" flex flex-col  m-auto min-h-screen items-center px-16 py-10    ">

        <label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Name</span>
    
  </div>
  <input type="text" placeholder="Add Name" v-model="form.name" class="input input-bordered text-black w-full rounded-md" />
 
</label>
<label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Email</span>
    
  </div>
  <input type="email" placeholder="Add Email" v-model="form.email" class="input input-bordered text-black w-full rounded-md" />
 
</label>
<label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Gender</span>
    
  </div>
  <input type="text" placeholder="Male or Femal" v-model="form.gender" class="input input-bordered  text-black w-full rounded-md " />
 
</label>
<label class="form-control w-3/4 ">
  <div class="label">
    <span class="label-text">Age</span>
    
  </div>
  <input type="text" placeholder="Input Age" v-model="form.age" class="input input-bordered  text-black w-full rounded-md" />
 
</label>
<label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Registration Number</span>
    
  </div>
  <input type="text" placeholder="Regist Number" v-model="form.no_reg" class="input input-bordered  text-black w-full rounded-md" />
 
</label>
<label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Care Number</span>
    
  </div>
  <input type="text" placeholder="Care Number" v-model="form.no_rawat" class="input input-bordered  text-black w-full rounded-md" />
 
</label>
<label class="form-control w-3/4 ">
  <div class="label">
    <span class="label-text">Unit</span>
    
  </div>
  <input type="text" placeholder="Input Unit" v-model="form.unit" class="input input-bordered  text-black w-full rounded-md" />
 
</label>
<label class="form-control  w-3/4 ">
  <div class="label">
    <span class="label-text">Doctor</span>
    
  </div>
  <input type="text" placeholder="Add Doctor" v-model="form.dr" class="input input-bordered  text-black w-full rounded-md" />
 
</label>
<div class="py-2">

</div>
<input type="submit" value="Add Patient" class="w-32 h-12 bg-blue-500 hover:bg-blue-700 hover:cursor-pointer text-white m-10"/>
</div>
      </form>




</template>