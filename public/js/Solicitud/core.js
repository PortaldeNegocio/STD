new Vue({
	el:'#pageContent',
	created: function(){
		this.findSolicitudEstudio(this.id);
	},
	data: {
		id: 3,
		solicitudEstudio: '',
		currentPage: ''
	},
	methods: {
		findSolicitudEstudio: function(param){
			axios.get('findSolicitudEstudio/'+param).then(response => {
				this.solicitudEstudio = response.data;
			});
		},
		selectTab: function(e){
		//	alert(e);
			this.currentPage = e;
		}
	}

})