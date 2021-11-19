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
          <ion-item-sliding  >
            <ion-item>
              <ion-label color="danger"> Cerrar Sesion </ion-label>
            </ion-item>
            <ion-item-options side="end">
              <ion-item-option  @click="CerrarSesion(item)" color="danger"> <ion-icon :icon="powerOutline" size="large" > </ion-icon> </ion-item-option>
            </ion-item-options> 
          </ion-item-sliding>
          <!--<ion-item-sliding  v-for="Catproducto in Catproductos" :key="Catproducto">
            <ion-item>
              <ion-label color="danger">{{Catproducto.name}} </ion-label>
            </ion-item>
            <ion-item-options side="end">
              <ion-item-option @click="unread(item)" color="danger"> <ion-icon :icon="handRightOutline" size="large" > </ion-icon> </ion-item-option>
            </ion-item-options>
          </ion-item-sliding>-->
       </ion-list>
      </ion-content>
    </ion-menu>
    <ion-router-outlet id="main"></ion-router-outlet>
    <ion-content >
      <modal-crear :is-open="modalInfo.show" @modal-closed="handleModalClosed"  />
      <ion-button color="success" @click="showModal" > <ion-icon :icon="addCircleOutline" size="large" > </ion-icon></ion-button>
      <!--<ion-button color="primary" @click="btnActualizar()" > <ion-icon :icon="syncOutline" size="large" > </ion-icon></ion-button>-->
      <!--<ion-button color="danger" @click="btnBorrar()"> <ion-icon :icon="closeCircleOutline" size="large" > </ion-icon></ion-button>-->
      <pre>{{JSON.stringify(modalInfo, null,2)}}</pre>
      <ion-list>
        <ion-item id="Moviles">
          <ion-label color="danger">Id:</ion-label>
          <ion-label color="danger">Nombre de Producto: </ion-label>
          <ion-label color="danger">Stock Producto:</ion-label>
          <ion-button color="primary" > <ion-icon :icon="playOutline" size="large" @click="btnVer()" > </ion-icon></ion-button>
          <ion-button color="success" > <ion-icon :icon="syncOutline" size="large" @click="btnActualizar()" > </ion-icon></ion-button>
          <ion-button color="danger"> <ion-icon :icon="closeCircleOutline" size="large" @click="btnBorrar()" > </ion-icon></ion-button>
        </ion-item>
      </ion-list>
    </ion-content >
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
  IonTitle, 
  IonToolbar,
  menuController,
  IonLabel,
  IonButton,
  IonIcon,
  IonItemOptions,
  IonItemOption,
  IonRouterOutlet,
  IonItemSliding 
} from '@ionic/vue';

import { defineComponent, reactive } from 'vue';
import { handRightOutline,reorderThreeOutline} from 'ionicons/icons'
import { useRouter } from 'vue-router';
import { addCircleOutline,syncOutline,powerOutline, closeCircleOutline,playOutline  } from  'ionicons/icons'
import ModalCrear from "../views/ModalCrear.vue"




export default defineComponent({
  name:'Menu',
  components: {
    IonPage,
    IonContent, 
    IonHeader, 
    IonItem, 
    IonList, 
    IonMenu, 
    IonTitle, 
    IonToolbar,
    IonLabel,
    IonButton,
    IonIcon,
    IonItemOptions,
    IonItemOption,
    IonRouterOutlet,
    IonItemSliding,
    ModalCrear 
  },
    setup (){ 
      menuController.enable(true, 'first');
      menuController.open('first');
      const router = useRouter();
      const modalInfo = reactive<{ show: boolean; data: any }>({
        show:false,
        data: null,
    });
    const showModal = () => {
      modalInfo.show = true;
    };
    const handleModalClosed = (eventData: any) =>{
      modalInfo.show= false;
      alert(JSON.stringify(eventData));
      modalInfo.data = eventData

    }
    return {
      showModal,
      modalInfo,
      handRightOutline,
      menuController,
      reorderThreeOutline,
      router,
      addCircleOutline,
      syncOutline,
      closeCircleOutline,
      handleModalClosed,
      playOutline ,
      powerOutline
    };
  },
});
</script>

