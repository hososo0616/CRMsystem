<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { getToday } from "/resources/common";
import { onMounted } from "vue";
import { ref } from "vue";

const props = defineProps({
    customers: Array,
    items: Array,
});

const itemList = ref([]);

onMounted(() => {
    form.date = getToday();
    props.items.forEach((item) => {
        itemList.value.push({
            id: item.id,
            name: item.name,
            price: item.price,
            quantity: 0,
        });
    });
});

const form = reactive({
    date: null,
    customer_id: null,
    // items: []
});

// const totalPrice = computed(() => {
//     let total = 0;
//     itemList.value.forEach((item) => {
//         total += item.price * item.quantity;
//     });
//     return total;
// });

const quantity = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
</script>

<template>
    日付<br />
    <input type="date" name="date" v-model="form.date" /><br />
    会員名<br /><br />
    <select name="customer" v-model="form.customer_id">
        <option
            v-for="cutomer in customers"
            :value="cutomer.id"
            :key="cutomer.id"
        >
            {{ cutomer.id }} : {{ cutomer.name }}
        </option>
    </select>
    <br /><br />
    商品・サービス<br />
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>商品名</th>
                <th>金額</th>
                <th>数量</th>
                <th>小計</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in itemList">
                <!-- <tr v-for="item in items"> -->
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.price }}</td>
                <td>
                    <select name="quantity" v-model="item.quantity">
                        <option v-for="q in quantity" :value="q">
                            {{ q }}
                        </option>
                    </select>
                </td>
                <td>{{ item.price * item.quantity}}</td>
            </tr>
        </tbody>
        {{
            itemList
        }}
    </table>
    <br /><br />
    <!-- 合計 {{ totalPrice }}円 -->
</template>
