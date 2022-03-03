export default {
    SaveD(NomData,data) {
       localStorage.setItem(NomData, data);
    },
    GetD(NomData){
      return localStorage.getItem(NomData);
    },
    RemoveD(NomData){
       localStorage.removeItem(NomData);
    }
}