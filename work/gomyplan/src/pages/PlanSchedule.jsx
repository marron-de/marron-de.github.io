import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Form from "react-bootstrap/Form";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import BigButton from "../components/BigButton";

// img
import ActivityThum1 from "../assets/img/activity_img1.png";
import ActivityThum2 from "../assets/img/activity_img2.png";
import SpotThum1 from "../assets/img/spot_thum1.png";
import SpotThum2 from "../assets/img/spot_thum2.png";
import SpotThum3 from "../assets/img/spot_thum3.png";
import SpotThum4 from "../assets/img/spot_thum4.png";

// style
const ScheduleBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 30px;
  margin-bottom: 50px;
`;

const ScheduleItem = styled.div`
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 20px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  transition: var(--transition);

  & > button {
    margin-top: 4px;
    box-shadow: none !important;
  }

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const ScheduleTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ScheduleCardList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;

  .card {
    flex-direction: row;
    border-radius: 10px;
    padding: 6px;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    background: var(--color-white);
    border: none;
    transition: var(--transition);
  }

  .card-img {
    width: 80px;
  }

  .card-body {
    flex: 1;
    padding: 0 8px;
    display: flex;
    align-items: center;
  }

  .card_content {
    display: flex;
    flex-direction: column;
    gap: 3px;
  }

  .card-title {
    font-family: var(--second-family);
    font-weight: 600;
    font-size: 14px;
    line-height: 130%;
    letter-spacing: -0.02em;
    color: var(--color-default);
    margin: 0;
    transition: var(--transition);
  }

  .card-text {
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
    margin: 0;
    transition: var(--transition);
  }

  .form-check.check_ver {
    width: 36px;
    display: flex;
  }

  .form-check.check_ver .form-check-input {
    width: 30px;
    background: var(--color-gray);
    border: 2px solid #afafaf;
    transition: var(--transition);
  }

  .form-check.check_ver .form-check-input::before {
    background-image: url(/src/assets/img/icon_check2.png);
    width: 13px;
    transition: var(--transition);
  }

  .form-check.check_ver .form-check-input:checked {
    background: var(--color-main);
    border: 2px solid #b6d8ff;
  }

  .form-check.check_ver .form-check-input:checked::before {
    background-image: url(/src/assets/img/icon_check_on.png);
  }

  .form-check.check_ver .form-check-label {
    display: none;
  }

  .darkMode & .card {
    background: var(--color-darkgray2);
  }

  .darkMode & .card-title {
    color: var(--color-input);
  }

  .darkMode & .card-text {
    color: var(--color-border);
  }
`;

const PlanSchedule = () => {

  const [selectedCount, setSelectedCount] = useState(0);

  const handleCheckboxChange = (event) => {
    if (event.target.checked) {
      setSelectedCount(selectedCount + 1);
    } else {
      setSelectedCount(selectedCount - 1);
    }
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Day 1 Schedule" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <ScheduleBox>
            <ScheduleItem>
              <ScheduleTitle>Recommended Activities</ScheduleTitle>
              <ScheduleCardList>
                <Card>
                  <Card.Img src={ActivityThum1} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Dumplings at Sham Shui Po</Card.Title>
                      <Card.Text>USD $50~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>

                <Card>
                  <Card.Img src={ActivityThum2} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Limousine from Airport &gt; Hotel</Card.Title>
                      <Card.Text>USD $29~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>
              </ScheduleCardList>
              <BigButton>See More</BigButton>
            </ScheduleItem>
            <ScheduleItem>
              <ScheduleTitle>Recommended Spots</ScheduleTitle>
              <ScheduleCardList>
                <Card>
                  <Card.Img src={SpotThum1} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Tram Ride to Victoria Peak</Card.Title>
                      <Card.Text>USD $20~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>

                <Card>
                  <Card.Img src={SpotThum2} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Tour Around Victoria Dockside</Card.Title>
                      <Card.Text>USD $10~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>

                <Card>
                  <Card.Img src={SpotThum3} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Star Ferry to Harbour City</Card.Title>
                      <Card.Text>USD $5~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>

                <Card>
                  <Card.Img src={SpotThum4} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>View the Victoria Harbour</Card.Title>
                      <Card.Text>USD $0~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange}/>
                </Card>
              </ScheduleCardList>
              <BigButton>See More</BigButton>
            </ScheduleItem>
          </ScheduleBox>
        </PageContent>
        <PageBtnbox className="fixed">
          <BigButton className="ver2">Selected ({selectedCount})</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default PlanSchedule;
