var ___jtrans = @json($groups);

function jtrans(key, parameters)
{
    if (parameters === undefined) {
        parameters = {};
    }
    var out = __jtransHelper(key, parameters, ___jtrans, '');
    for(var parameter in parameters){
        out = out.replace(new RegExp("\:"+parameter), parameters[parameter]);
    }
    return out;
}

function __jtransHelper(key, parameters, __data, previous_key)
{
    var key_array = key.split(".");
    var this_group = key_array[0];
    key_array = key_array.splice(1, key_array.length-1);
    var searchingKey = key_array.join('.');
    if( typeof __data[this_group] !== 'undefined' ) {
        if(searchingKey.length>0){
            return __jtransHelper(searchingKey, parameters, __data[this_group], previous_key+(previous_key.length>0?'.':'')+this_group);
        } else {
            return __data[this_group];
        }
    }
    return previous_key+'.'+this_group;
}
