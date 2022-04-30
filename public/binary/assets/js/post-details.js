class PostDetails {
    getPost(id = 6) {
        var response = sendRequest("GET", `/post/${id}`);
        response = JSON.parse(response);
        var obj = response.data;
        return obj;
      }

      getComment(id = 6) {
        
        var response = sendRequest("GET", `/comment/${id}`);
        response = JSON.parse(response);
        var obj = response.data;
        if (obj.statusCode != 200)
          return null;
        return obj;
      }
}