import '@fancyapps/fancybox';

export default class Fancybox {
	constructor(){

		this.body = document.querySelector('body');

	}
	params(){
		let self = this;
		return {
			autoFocus: false,
			touch: false,
			smallBtn : true,
			beforeShow: function () {
				self.body.classList.add('overflow-hidden');
			},
			beforeClose: function () {
				self.body.classList.remove('overflow-hidden');
			}
		};
		
	}

	openModal(id, className){
		$.fancybox.open({
			src: id,
			baseClass: `c-modal-container c-modal-container--modal ${className}`,
			...this.params(),
		});
	}

	


	
}

