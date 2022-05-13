class PostDetails {
    getPost(id) {
        var response = sendRequest("GET", `/post/${id}`);
        response = JSON.parse(response);
        var obj = response.data;
        return obj;
      }

      getComment(id) {
        
        var response = sendRequest("GET", `/comment/${id}`);
        response = JSON.parse(response);
        var obj = response;
        if (obj.statusCode != 200)
          return null;
        return obj.data;
      }
}