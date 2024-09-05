<template>
    <div>
      <h1>Create a New Post</h1>
      <form @submit.prevent="createPost" enctype="multipart/form-data">
        <input v-model="title" type="text" placeholder="Title" required />
        <textarea v-model="body" placeholder="Body" required></textarea>
        <input type="file" @change="handleFileUpload" />
        <button type="submit">Create Post</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { useRouter } from 'vue-router';
  import axios from 'axios';
  const title = ref('');
  const body = ref('');
  const image = ref(null);
  const router = useRouter();
  
  const handleFileUpload = (event) => {
    image.value = event.target.files[0];
  };
  
  const createPost = async () => {
    const formData = new FormData();
    formData.append('title', title.value);
    formData.append('body', body.value);
    if (image.value) {
      formData.append('image', image.value);
    }
   axios.post('http://127.0.0.1:8000/api/blogs', formData).then(res=>{
    alert('added blog sucessfully');
    router.push('/Blogs');
   }); 
    
  };
  </script>
  