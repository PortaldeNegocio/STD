new Vue({
	el: '#tabs',
	created: function() {
		this.getAllSolicitudes(this.selectedTab);
		//this.setPage(1);
	},
	data: {
		searchKey: '',
		selectedTab: "En Desarrollo",
		currentPage: 0,
        itemsPerPage: 5,
        resultCount: 0,
		solicitudEstudios: [],
	},
	methods:{
		getAllSolicitudes: function(param){
			axios.get('getSolicitudes/'+param).then(response => {
				//console.log(response.data); 
				this.solicitudEstudios = response.data;
			});
		},
		selectTab: function(val) {
            this.selectedTab = val;   
            this.getAllSolicitudes(this.selectedTab);  	
		},
		setPage: function(pageNumber) {
          this.currentPage = pageNumber
        }
	},
	computed: {
		totalPages: function() {
          return Math.ceil(this.solicitudFilteredBySearchKey.length / this.itemsPerPage)
        },
        solicitudFilteredBySearchKey: function() {
			return this.solicitudEstudios.filter(
				(item) => 
				(item.id == this.searchKey) ||
				(item.cliente.Apellido.toLowerCase().includes(this.searchKey.toLowerCase())) ||
				(item.cliente.Nombre.toLowerCase().includes(this.searchKey.toLowerCase())) ||
				(item.Obra.toLowerCase().includes(this.searchKey.toLowerCase())) ||
				(item.Direccion.toLowerCase().includes(this.searchKey.toLowerCase()))
				);
		},
 		paginatedSolicitud: function(){
	/*		if (this.currentPage >= this.totalPages) {
              this.currentPage = this.totalPages - 1
            }*/
            var index = this.currentPage * this.itemsPerPage
            return this.solicitudFilteredBySearchKey.slice(index, index + this.itemsPerPage)
        },

/*        solicitudFilteredBySearchKey: function() {
                const vm = this;
                return _.filter(vm.solicitudEstudios, function (solicitud) {
                    return ~solicitud.Obra.toLowerCase().indexOf(vm.searchKey.toLowerCase());
                });
            },*/

		

	},
});


$(document).on('#dataTableNet', function(e){

 $('#dataTableNet').DataTable();
});

