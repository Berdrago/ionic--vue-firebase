
<template>
  <ion-page>
    <ion-header>
      <ion-toolbar  class="centrado">
         <!-- Titulo de  la pagina--> 
        <ion-buttons  >
          <ion-back-button defaultHref="/" color="danger" mode="ios"> </ion-back-button>
        </ion-buttons>
        <ion-title style="color:red" class="title" >Iniciar Sesion</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content  class="login">
      <form action  @submit.prevent="login">
        <ion-item class="centrado" > 
            <ion-label position="floating" class="rojo" for="#email" >Correo de Usuario</ion-label>
            <ion-input  v-model="email" type="email" id="email" required placeholder="Email" ></ion-input>
        </ion-item>
        <ion-item class="centrado"> 
            <ion-label position="floating" class="rojo" for="#password"  >Contraseña</ion-label>
            <ion-input v-model="password" type="password" id="password"  required placeholder="Password"></ion-input>
        </ion-item>
        <ion-button  expand="full" fill="outline" class="espacio"  style="margin: 50px" color="danger" type="submit" @click="() => router.push('/menu')" > Login</ion-button>
      </form>
      <ion-button  expand="full" fill="outline" class="espacio"  color="danger" @click="() => router.push('/register')"  > CrearCuenta</ion-button>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { IonContent,IonItem,  IonPage,IonButton,IonLabel,IonInput,IonTitle,IonBackButton, IonButtons,IonToolbar, IonHeader } from '@ionic/vue';
import { defineComponent } from 'vue';
import { useRouter } from 'vue-router';


export default defineComponent({
  name: 'Login',
  components: {
    IonContent,
    IonPage,
    IonLabel,
    IonInput,
    IonTitle,
    IonButton,
    IonItem,
    IonBackButton, 
    IonButtons,
    IonToolbar,
    IonHeader
   
  },
  data: () => ({
    email: "",
    password: "",
    error: false
  }),
  methods: {
    login() {
      console.log(this.email);
      console.log(this.password);
    }
  },
  setup() {
      const router = useRouter();
      return { router };
    }
  
});
</script>