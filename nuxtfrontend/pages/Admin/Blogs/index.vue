<template>
    <div>
      <h1>blogs</h1>
      <ul>
        <li v-for="blog in blogs" :key="blog.id">
          <NuxtLink :to="'/Blogs/' + blog.id">{{ blog.title }}</NuxtLink>
          <img width="150px" height="150px" :src="`http://127.0.0.1:8000/storage/${blog.image_path}`" alt="" v-if="blog.image_path">
          <NuxtLink class="btn btn-success" :to="`Blogs/${blog.id}`">Edit</NuxtLink>
          <button class="btn btn-danger" @click="deleteBlog(blog.id)">Delete</button>
        </li>
      </ul>
      <NuxtLink to="Blogs/create">Create New blog</NuxtLink>
    </div>
    
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  const blogs = ref([]);
  onMounted(async () => {
    axios.get('http://127.0.0.1:8000/api/blogs').then(res =>{
        blogs.value = res.data;
    });
    
  });

  const deleteBlog = (blogId) => {
    if(confirm('Are you sure to delete?')){

    axios.delete(`http://127.0.0.1:8000/api/blogs/${blogId}/delete`).then(res=>{
      alert("deleted blog sucessfully");
      axios.get('http://127.0.0.1:8000/api/blogs').then(res =>{
        blogs.value = res.data;
    });


    });}
  }


  const clicked = ()=>{
    console.log(blogs.value)
  }

  </script>
  