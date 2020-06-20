import Errors from '../error'

export default e => {
    
    e.prototype.setError = function(){
        return this.error = new Errors({});
    }
}