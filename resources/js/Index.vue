<template>
    <div class="container-fluid">
        <navbar></navbar>
        <router-view></router-view>
        <footerelement></footerelement>
    </div>
</template>
<script>
import navbar from './components/NavBar/Navbar';
import footer from './components/Footer/Footer';

export default ({
    components:{
        'navbar':navbar,
        'footerelement':footer
    },
    setup() {
        
    },
})
</script>
