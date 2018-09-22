    this.warenkorb = [];
    this.tisch = 50;
    this.gast = "COOK";
    this.restaurant = 1;

	function warenkorbHinzu(gericht_id){
        this.warenkorb.push(gericht_id);
	}

    function warenkorbEntf(gericht_id){
        for (var i = 0; i < this.warenkorb.length; i++) {
            if(this.warenkorb[i] === gericht_id){
                this.warenkorb.splice(i,1);
                break;
            }
        }
	}
    
    function getWarenkorb(){
    	return this.warenkorb;
    }

    function bestellen(){
        jQuery.ajax({
            url: "Bestellen.php",
            type: "POST",
            data:{
                warenkorb: this.warenkorb,
                restaurant: this.restaurant,
                gast: this.gast,
                tisch: this.tisch
            }
        });

    }