<template>
  <ion-page>
    <ion-header>
      <ion-toolbar  class="centrado">
         <!-- Titulo de  la pagina--> 
        <ion-buttons  >
          <ion-back-button defaultHref="/" color="danger" mode="ios"> </ion-back-button>
        </ion-buttons>
        <ion-title style="color:red" class="title" >Crear Cuenta</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content  class="login">
        <form action  @submit.prevent="register">
            <ion-item class="centrado" > 
                <ion-label position="floating" class="rojo" for="#email" >Ingresa correo </ion-label>
                <ion-input  v-model="email" type="email" id="email" required placeholder="Email" ></ion-input>
            </ion-item>
            <ion-item class="centrado"> 
                <ion-label position="floating" class="rojo" for="#password"  >Ingresa la Contraseña</ion-label>
                <ion-input v-model="password" type="password" id="password"  required placeholder="Contraseña"></ion-input>
            </ion-item>
            <ion-item class="centrado"> 
                <ion-label position="floating" class="rojo" for="#password"  > Repite la Contraseña</ion-label>
                <ion-input v-model="passwordRepeat" type="password" id="password-repeat"  required placeholder="Repite la contraseña"></ion-input>
            </ion-item>
            <ion-button  expand="full" fill="outline" class="espacio"  style="margin: 50px" color="danger" type="submit"  > Crear Usuario</ion-button>
        </form>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { IonContent,IonItem,  IonPage,IonButton,IonLabel,IonInput,IonTitle,IonBackButton, IonButtons,IonToolbar,IonHeader } from '@ionic/vue';
import { defineComponent } from 'vue';




export default defineComponent({
  name: 'Register',
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
    passwordRepeat: ""
  }),
  methods: {
    register() {
      console.log(this.email);
      console.log(this.password);
      console.log(this.passwordRepeat);
      
    }
  } 
});
</script>