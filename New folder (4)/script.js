var app = angular.module('githubAPI', []);

app.factory('githubService', function($http) {
  var GITHUB_API_ENDPOINT = 'https://api.github.com';
  return {
    getUserAvatarUrl: function(username) {
      return $http.get(GITHUB_API_ENDPOINT + '/users/' + username).then(function(res) {
        return res.data.avatar_url;
      });
    }
  }
});

app.controller('MainCtrl', function($scope, githubService) {
  $scope.callAPI = function() {
    githubService.getUserAvatarUrl($scope.username).then(function(avatarSrc) {
      $scope.avatarSrc = avatarSrc;
    });
  };
});