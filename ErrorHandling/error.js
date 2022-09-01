try {
    setTimeout(() => {
        something();
    }, 2000)
    
    console.log('Second of try');
}
catch (err){
    console.log("Error find");
    // console.log(err);
}