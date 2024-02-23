<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    users: Object,
});
</script>

<template>
    <div class="max-w-8xl p-6 items-center">
        <div class="flex flex-row">
            <h1 class="p-2 text-2xl font-bold">Patient Data</h1>
            <a href="/users/create">
                <button
                    class="bg-green-500 text-white w-32 h-8 my-2 mx-4 rounded-md hover:bg-green-700"
                >
                   ➕ Add Patient
                </button>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                    <tr class="bg-base-200">
                        <th>No</th>
                        <th>Name</th>

                        <th>Date</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Registration Number</th>
                        <th>Care Number</th>
                        <th>Unit</th>
                        <th>Doctor</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr v-for="(user, index) in users">
                        <th>{{ index + 1 }}</th>
                        <td>{{ user.name }}</td>

                        <td>{{ user.created_at }}</td>
                        <td>{{ user.gender }}</td>
                        <td>{{ user.age }}</td>
                        <td>{{ user.no_reg }}</td>
                        <td>{{ user.no_rawat }}</td>
                        <td>{{ user.unit }}</td>
                        <td>{{ user.dr }}</td>
                        <td class="p-2 flex flex-row text-white">
                            <Link :href="`users/${user.id}/edit`">
                                <button
                                    class="w-24 h-8 bg-blue-500 hover:bg-blue-700 mx-2 my-2 md:my-0 rounded-md"
                                >
                                    🖋️ Edit
                                </button>
                            </Link>
                            <Link :href="`users/${user.id}`" method="delete">
                                <button
                                    class="w-24 h-8 bg-red-700 hover:bg-red-800 mx-2 rounded-md"
                                >
                                   ❌ Delete
                                </button>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
