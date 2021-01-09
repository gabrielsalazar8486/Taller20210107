new Vue({
    el: '#inverter',
    data(){
        return{
            textedInput: '',
            invertedText:'',
            reInvertedText:''
        }
    },
    methods:{
        invertWords(){
            let textToInvert = this.textedInput;
            let invertText = '';
            for (let i = textToInvert.length - 1; i >= 0; i--) {
                invertText += textToInvert[i];
            }
            this.invertedText = invertText;
        },

        erase(){
            this.textedInput = '';
            this.invertedText = '';
        }
    }
})