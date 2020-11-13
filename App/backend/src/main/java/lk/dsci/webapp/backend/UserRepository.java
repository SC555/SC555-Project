package lk.dsci.webapp.backend;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import lk.dsci.webapp.backend.io.entity.UserEntity;

@Repository
public interface UserRepository extends CrudRepository<UserEntity, Long> {
	
	UserEntity findUserByEmail(String email);
}
