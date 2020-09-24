package ch.zli.m223.punchclock.repository;

import ch.zli.m223.punchclock.domain.Tag;
import org.springframework.data.jpa.repository.JpaRepository;

public interface TagRepository extends JpaRepository<Tag, Long> {
}
