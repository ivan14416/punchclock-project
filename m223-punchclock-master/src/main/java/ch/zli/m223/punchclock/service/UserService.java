package ch.zli.m223.punchclock.service;

import ch.zli.m223.punchclock.domain.ApplicationUser;
import ch.zli.m223.punchclock.repository.UserRepository;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class UserService {
    private UserRepository userRepository;

    public UserService(UserRepository userRepository) {
        this.userRepository = userRepository;
    }

    public ApplicationUser createUser(ApplicationUser applicationUser) {
        return userRepository.save(applicationUser);
    }

    public List<ApplicationUser> findAllUsers() {
        return userRepository.findAll();
    }

    public ApplicationUser editUser(ApplicationUser applicationUser) {
        return userRepository.save(applicationUser);
    }

    public void deleteUser(ApplicationUser applicationUser) {
        userRepository.delete(applicationUser);
    }
}
