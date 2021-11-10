<template>
  <ion-page>
    <ion-header>
      <ion-toolbar  style="colo:red" class="centrado">
        <ion-title style="color:red" > Menu</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-menu side="start" menu-id="custom" class="my-custom-menu" content-id="main">
      <ion-header>
        <ion-toolbar color="danger" class="centrado">
          <ion-title >Menu</ion-title>
        </ion-toolbar>
      </ion-header>
      <ion-content >
        <ion-list>
          <ion-item-sliding  v-for="Catproducto in Catproductos" :key="Catproducto">
            <ion-item>
              <ion-label color="danger">{{Catproducto.name}} </ion-label>
            </ion-item>
            <ion-item-options side="end">
              <ion-item-option @click="unread(item)" color="danger"> <ion-icon :icon="handRightOutline" size="large" > </ion-icon> </ion-item-option>
            </ion-item-options>
          </ion-item-sliding>
       </ion-list>
      </ion-content>
    </ion-menu>
    <ion-router-outlet id="main"></ion-router-outlet>
    <ion-content  class="login">
        <form action  @submit.prevent="login">
            <ion-item  > 
                <ion-label position="floating" class="rojo" for="#producto" >Producto</ion-label>
                <ion-input  v-model="producto" type="string" id="producto" required placeholder="Ingresa Nombre de producto" ></ion-input>
            </ion-item>
            <ion-item > 
                <ion-label position="floating" class="rojo" for="#cproducto"  >Cantidad</ion-label>
                <ion-input v-model="cproducto" type="number" id="cproducto"  required placeholder="Ingresa la cantidad de productos"></ion-input>
            </ion-item>
            <ion-item > 
                <ion-label position="floating" class="rojo" for="#cateproducto"  >Categoria</ion-label>
                <ion-input v-model="cateproducto" type="string" id="cateproducto"  required placeholder="Ingresa nombre de la cataegoria"></ion-input>
            </ion-item>
            <ion-button  expand="full" fill="outline" class="espacio"  style="margin: 50px" color="danger" type="submit"  > Crear Producto</ion-button>
        </form>
        <ion-button  expand="full" fill="outline" class="espacio"  color="danger" type="submit" @click="() => router.push('/lista')" > Lista de Productos</ion-button>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { 
  IonPage,
  IonContent, 
  IonHeader, 
  IonItem, 
  IonList, 
  IonMenu, 
  IonRouterOutlet,
  IonTitle, 
  IonToolbar,
  menuController,
  IonLabel,
  IonButton,
  IonInput
} from '@ionic/vue';
import { defineComponent } from 'vue';
import { handRightOutline,reorderThreeOutline} from 'ionicons/icons'
import { App } from '../App.vue';
import { useRouter } from 'vue-router';



export default defineComponent({
  name:'Menu',
  components: {
    IonPage,
    IonContent, 
    IonHeader, 
    IonItem, 
    IonList, 
    IonMenu, 
    IonRouterOutlet,
    IonTitle, 
    IonToolbar,
    IonLabel,
    IonButton,
    IonInput
  },
  data: () => ({
    producto: "",
    cproducto: "",
    cateproducto:"",
  }),
  methods: {
    login() {
      console.log(this.producto);
      console.log(this.cproducto);
      console.log(this.cateproducto)
    }
  },
    setup (){
    const  {Catproductos} = App ()
    menuController.enable(true, 'first');
    menuController.open('first');
    const router = useRouter();
    return {
      Catproductos,
      handRightOutline,
      menuController,
      reorderThreeOutline,
      router 
    }
    
    
  }
  
});
</script>