package lk.dsci.webapp.backend.service;

import org.springframework.security.core.userdetails.UserDetailsService;

import lk.dsci.webapp.backend.Dto.UserDto;

public interface UserService extends UserDetailsService{
	UserDto createUser(UserDto user);

}
