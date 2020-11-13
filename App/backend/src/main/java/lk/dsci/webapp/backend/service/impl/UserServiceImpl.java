package lk.dsci.webapp.backend.service.impl;

import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import lk.dsci.webapp.backend.UserRepository;
import lk.dsci.webapp.backend.Dto.UserDto;
import lk.dsci.webapp.backend.io.entity.UserEntity;
import lk.dsci.webapp.backend.service.UserService;

@Service
public class UserServiceImpl implements UserService {
	
	@Autowired
	UserRepository userRepository;

	@Override
	public UserDto createUser(UserDto user) {
		UserEntity userEntity = new UserEntity();
		BeanUtils.copyProperties(user, userEntity);
		
		userEntity.setUserId("testuser");
		userEntity.setEncodedPassword("test");
		
		
		UserEntity storedUserDetails = userRepository.save(userEntity);
		UserDto returnValue = new UserDto();
		BeanUtils.copyProperties(storedUserDetails, returnValue);
		
		return returnValue;
		
	}

}
